<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Guest {
	var $name;

	function Guest(){
		$this->name = 'Гость';
	}

	function get_gallery() {
		$this->load->view('gallery_guest'); 
	}
	
	function get_blog ($data) { //формирование таблицы блога(кнопки, финтифлюшки)
		$table;
		$table="<table border=1 cellpadding='15'>";//добавить css к таблице
		foreach ($data as $value) {
			$table.="<tr><td>".$value['text']."</td><td>".$value['date']."</td></tr>";
		}
		$table.="</table>";
		return $table;	
	}
}
?>