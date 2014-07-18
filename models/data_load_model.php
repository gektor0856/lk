<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_load_model extends CI_Model {

	function get_info($login)
	{
		$res;

		$this->db->where('login',$login);
		$this->db->select('inf');
		$query = $this->db->get('user_data');

		$res = $query->row_array();
		return $res['inf'];
	}


	function get_img($login)
	{
		
		$this->db->where('login',$login);
		$this->db->select('photo');
		$query = $this->db->get('user_data');
		
		$res = $query->row_array();
		return $res['photo'];
	}





}