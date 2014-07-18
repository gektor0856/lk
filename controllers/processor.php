<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Processor extends CI_Controller {

	var $own_data;//поле для домашней страницы
	var $foreign_data;//поле для чужой страницы
	var $own_page;
	var $foreign_page;
	
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('Guest','User','Admin'));


	}

	function index() {
		if($this->session->userdata('is_logged_in') == true) {//заходим как зарегестрированный пользователь

			$this->input_cabinet();
		}
		else {//заходим как гость
			header("Location: http://www.lk/inter");
			}
	}

	function init_user(){// загрузка объекта
		$this->load->model('data_load_model');//загрузка основной инф из бд
		$info =  $this->data_load_model->get_info($this->session->userdata('username'));
		$avatar =  $this->data_load_model->get_img($this->session->userdata('username'));
		$role =  $this->session->userdata('role');

		$this->own_data  = array('login' => $this->session->userdata('username'),'info' => $info,'avatar' => $avatar,'role' => $role);
		$this->load->library('Users_control', $this->own_data,'own_page');//инициализация класса

		
	}

	function input_cabinet() { //функция входа авторизованного пользователя
		// $authUser = $this->adldap->authenticate($this->input->post('username'), $this->input->post('password'));
		// $user_info = $this->adldap->user_info($this->input->post('username'));
		//$login = $this->session->userdata('username');
		$this->init_user();

		$this->show_blog('own');
		$this->draw_page($this->own_data);
	}

	function look($login){//просмотр других пользователей
		$this->load->model('data_load_model');//загрузка основной инф из бд
		$info =  $this->data_load_model->get_info($login);
		$avatar =  $this->data_load_model->get_img($login);

		switch ($this->session->userdata('role')) {//определение прав текущего пользователя на других страницах
			case 'guest':
				$role = 'guest';
				break;
			
			case 'user':
				$role = 'guest';
				break;

			case 'admin':
				$role = 'admin';
				break;
		}

		$this->foreign_data = array('login' => $login,'info' => $info,'avatar' => $avatar,'role' => $role);//загрузка основной информации
		$this->load->library('Users_control', $this->foreign_data,'foreign_page');//инициализация класса для посещения других страниц
		

		$this->show_blog('foreign');
		$this->draw_page($this->foreign_data);

	}
	function show_contacts(){ //ЗАГРУЗКА СПИСКА КОНТАКТОВ
		$this->init_user();//подгрузка объекта

		$this->load->model('contacts_model');
		$this->list = $this->contacts_model->get_data_table($this->session->userdata('username'));
		
		$this->own_data['header'] = 'Список контактов';
		$this->own_data['content'] = $this->own_page->show_contacts($this->list); 
	 

		$this->draw_page($this->own_data);
	}
	
	/***********УПРАВЛЕНИЕ БЛОГОМ ************/
	 function show_blog($str){//ЗАГРУЗКА БЛОГА(параметр- какие данные загружаем:свои или чужие)
		
		$this->load->model('blog_model');//загрузка модели обработчика блога

		switch ($str) {
			case 'own':
				$this->data = $this->blog_model->select_text($this->own_data);//массив данных блога
 				$this->own_data['header'] = 'Блог';
 				$this->own_data['content']= $this->own_page->show_blog($this->data);//переработка массива
				break;
			case 'foreign':
				$this->data = $this->blog_model->select_text($this->foreign_data);//массив данных блога
				$this->foreign_data['header'] = 'Блог';
 				$this->foreign_data['content']= $this->foreign_page->show_blog($this->data);//переработка массива
				break;
			}
		}

	 function delete_blog($id){//удаение записи
	 	$this->load->model('blog_model');
	 	$this->blog_model->delete_text($id);
	 	$this->index();
	 }

	 function insert_blog(){
	 	
	 }

	function draw_page($array){// вызывается последняя
		$this->load->view('cabinet_view',$array);//отрисовка шаблона

	}
}

?>