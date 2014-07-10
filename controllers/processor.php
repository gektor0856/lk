<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users_control extends CI_Controller {



var $id;
var $info;
var $div;
var $photos;
var $blog;
var $avatar;
var $projects;
var $role;


function Users_control($id,$info,$div,$photos,$blog,$avatar,$projects,$role){//конструктор класса
	$this->id = $id;
	$this->info = $info;
	$this->div = $div;
	$this->photos = $photos;
	$this->blog = $blog;
	$this->avatar = $avatar;
	$this->projects = $projects;
	role_init($role);
}

function role_init($role){
	switch ($role) {
		case 'Guest':
			$role = new Guest;
			break;
		case 'User':
			$role = new User;
			break;
		case 'Admin':
			$role = new Admin;
			break;	
		
	}
}

}

$new_user = new Users_control;



}

?>