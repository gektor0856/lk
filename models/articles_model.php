<?php
class Articles_model extends CI_Model {

    function get_articles()
    {
        /*$this->db->limit('4');  // ����������� - ������� ������ 4 ������ �� ��
		$this->db->order_by('id','random');  // ���������� � ��������� �������
		$this->db->where('id','3');  // �������, ������� ������ ��� ���� id ����� 4
		$query = $this->db->get('articles');
		return $query->result_array();*/
		$query = $this->db->get('articles'); 
        return $query->result_array();  
    }

}
?>