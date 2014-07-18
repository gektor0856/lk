<?php if (!defined('BASEPATH')) exit('Нет доступа к скрипту'); 

class Admin extends User {
	function Admin(){
		$this->name = 'Админ';
	}

	// function get_gallery() {$this->load->view('gallery_admin'); }
	// function get_blog () { $this->load->view('blog_admin'); }
}
?>

