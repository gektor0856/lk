<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inter_model extends CI_Model {

	function add_login($data)
	{
		$this->db->insert('users',$data);
	}

}