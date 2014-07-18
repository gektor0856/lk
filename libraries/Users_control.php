<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_control {
var $login;
var $info;
var $avatar;
var $role;


function Users_control($params){//конструктор для домашней страницы

	$this->login = $params['login'];
	$this->info = $params['info'];
	$this->avatar = $params['avatar'];
	$this->role_init($params['role']);
}

function role_init($role){

	switch ($role) {
		case 'guest':
			$this->role = new Guest;
			break;
		case 'user':
			$this->role = new User;
			break;
		case 'admin':
			$this->role = new Admin;
			break;	
		
	}
	//print_r($this->role->name);
}
	function get_role(){
		return $this->role->name;
	}

	function show_gallery(){

		$this->role->get_gallery();
	}

	function show_blog($data){
		return $this->role->get_blog($data);
	}

	function show_contacts($data){
		// print_r($data);
		return $this->role->get_friends($data);
	}

}//class end

?>