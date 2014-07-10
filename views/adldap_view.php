<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<link  rel="shortcut icon" href="<?=base_url();?>css/favicon.ico">
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
	<title>Авторизация</title>
	<link rel="stylesheet" type="text/css" href="<?=base_url();?>css/adldap.css" /><!--не подключается!!!!!!!!!!-->
</head>
<body>
<div align="center">
  <div class="form_enter">
  <p class="ast_gos">Астраханский государственный университет</p>
  <p class="sis_upr">Личный кабинет</p>
	<form action='<?=base_url();?>inter/gateway' method='post'>
	<div class="back_form" >
	<p class="vhod">Вход в личный кабинет</p>
	<hr color="#e5e5e5" size="1px" style="margin:5px 0 !important;">
	<p class="form_name" >Имя пользователя (логин)</p>
	<div class="form_name1">
	<input name='username' class="form_name2" type='text' value=''>
	</div>
	<p class="form_pas" >Пароль</p>
	<div align="center" class="form_pas1">
	<input name='password' class="form_name2" type='password' value=''>
	</div>
	<div><input type='submit' class = "btn btn-success" name='submit' value='Вход' /></div>
	</div>
	</form>
  </div>
</div>
</body>
</html>

