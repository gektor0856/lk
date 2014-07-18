<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 
function __autoload($class_name) {
    @include  $class_name . '.php';  //можно ли с @????
}

class User extends Guest {
	

	function User(){
		$this->name = 'Юзер';
	}

	// function get_gallery() { $this->load->view('gallery_user'); }
	function get_blog ($data) { //формирование таблицы блога(кнопки, финтифлюшки)
		$table;
		$table="<a>Добавить запись</a><table border=1 cellpadding='15'>";//добавить css к таблице
		foreach ($data as $value) {
			$table.="<tr><td>".$value['text']."<br><a href='/processor/delete_blog/".$value['id']."'>Удалить</a><a>    Редактировать</a></td><td>".$value['date']."</td></tr>";
		}
		$table.="</table>";
		return $table;	
	}

	function get_friends($data){
		$table ="<table border=1 cellpadding='15'>";
		$v =0 ;

		foreach ($data as $key => $value) {
				$table.="<tr><td ><a href = '/processor/look/".$value[0]['login']."'>".$value[0]['login']."</a></td><td height = '100' width = '100' ><img src=".$value[0]['photo']."?></td></tr>";
		}
		$table.="</table>";
		return $table;	
	}
}
?>