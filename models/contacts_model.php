<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacts_model extends CI_Model {

	function get_list($login){
		$this->db->where('login',$login);
		$this->db->select('friends');
		$query = $this->db->get('user_data');
		$res=$query->row();			
		return $res;

	}

	function get_data_table($login){
		$result;
		$row = $this->get_list($login);
		$arr = preg_split('/ /', $row->friends);
		// print_r($arr);

		foreach ($arr as $value) {
			$this->db->where('login',$value);
			$this->db->select('login,photo');
			$query = $this->db->get('user_data');
			$result[]=$query->result_array();	
			
		}
		// print_r($result);
		return $result;
	}

}