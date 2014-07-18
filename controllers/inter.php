<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inter extends CI_Controller {

//--Конструктор, подключение библиотеки adldap(для AD)--//
/*function __construct()
{
	parent::__construct();
	$this->load->library('adldap');
}*/

//--Если пользователь зашел, но не вышел, перенаправляем в кабинет, иначе на форму авторизации--//
function index() {
	if($this->session->userdata('is_logged_in') == true) {
		//$this->input_cabinet();
		header("Location: http://www.lk/processor");

	}
	else {
		$this->load->view('adldap_view');
	}
}

//--Основная функция, проверки пользователя и его пароля--//
function gateway() {
	if ($this->session->userdata('is_logged_in') == true) {
		//$this->input_cabinet();
		header("Location: http://www.lk/processor");
	}
	else {
		//--Функция проверки пароля и логина--//
		//$authUser = $this->adldap->authenticate($this->input->post('username'), $this->input->post('password'));
		$data['login'] = $this->input->post('username'); 
		$data['password'] = $this->input->post('password'); 
		$this->load->model('inter_model2'); 
		$authUser = $this->inter_model2->select_login($data); 
		$role = $this->inter_model2->get_role($data);
		//--Функция записи всей информации о пользователе--//
		//$user_info = $this->adldap->user_info($this->input->post('username'));
		if ($authUser === true) {
			//$this->add_login();
			$this->session->set_userdata(array('username' => $this->input->post('username'),'password' => $this->input->post('password'),'role'=> $role,'is_logged_in'=>true));
			session_start();
			$_SESSION['login']=$this->input->post('username');
			header("Location: http://www.lk/processor");//загрузка контроллера
			//$this->input_cabinet();
		} 
		else {
			echo "Ошибка авторизацииghh";
			header("Location: http://www.lk/inter");
		}
	}
}

//--Если пользователь вышел, очищаем сессию и перенавправляем на форму авторицазии--//
function logout() {
	$this->session->sess_destroy();
	$this->index();
}

//--запись в массив data и перенаправление в личный кабинет--//
// function input_cabinet() {
// 	//$authUser = $this->adldap->authenticate($this->input->post('username'), $this->input->post('password'));
// 	//$user_info = $this->adldap->user_info($this->input->post('username'));
// 	$data = array('displayname' => $this->session->userdata('username'));
// 	$this->load->view('cabinet_view',$data);
// }

//--перенаправление в другой контроллер, для записи(изменения) данных пользователя--//
// function rerouting_profile() {
// 	header("Location: http://www.lk/profile");
// }

// function rerouting_document() {
// 	header("Location: http://asu.edu.ru/lk/document");
// }

function add_login() {
	$data['login'] = $this->input->post('username'); 
	$data['password'] = $this->input->post('password'); 
	$this->load->model('inter_model'); 
	$this->inter_model->add_login($data); 
}

}