<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inter_model2 extends CI_Model {

	function select_login($data)
	{
		
		$this->db->where('login', $data['login']);
		$this->db->where('password', $data['password']);
		$query = $this->db->get('users');
		if ($query->num_rows() > 0) return (true);
		else return (false);
	}

	function get_role($data){
		$this->db->where('login',$data['login']);
		$this->db->where('password',$data['password']);
		$this->db->select('role');
		$query = $this->db->get('users');

		$tmp;
		foreach ($query->result() as $row)
		{
		   $tmp = $row->role;
		}

		return $tmp;
	}

}