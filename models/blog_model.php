<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog_model extends CI_Model {

		function insert_text($data)
		{
			$str = $this->db->insert_string('blog',$data);
		}

		function select_text($data)
		{
			$this->db->where('login',$data['login']);
			$this->db->select('text,date,id');
			$query = $this->db->get('blog');
			$res=$query->result_array();
			//print_r($res);
			return $res;

		}

		function delete_text($id)
		{
			$this->db->where('id', $id);
			$this->db->delete('blog'); 
		}

		function update_text($data)
		{
			$str = $this->db->insert_string('blog',$data);
		}

	}


