<?php
class Articles_model extends CI_Model {

    function get_articles()
    {
        /*$this->db->limit('4');  // ограничение - выберет только 4 записи из БД
		$this->db->order_by('id','random');  // сортировка в хаотичном порядке
		$this->db->where('id','3');  // условие, выбрать статьи где поле id равно 4
		$query = $this->db->get('articles');
		return $query->result_array();*/
		$query = $this->db->get('articles'); 
        return $query->result_array();  
    }

}
?>