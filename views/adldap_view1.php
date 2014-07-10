<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>

<script type="text/javascript" src="<?=base_url();?>js/jquery.js"></script>
<link href="<?=base_url();?>css/enter.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>



<body>
<div class="enter">
<a onClick="enter_y()">Войти</a>
    <script>
		function enter_y(){
		 document.getElementById('enter_form').style.top="20px";
			}
		function enter_n(){
		 document.getElementById('enter_form').style.top="-250px";
			}
	</script>
	
</div>
<form action='<?=base_url()?>index.php/inter/gateway' method='post'>
<div id="enter_form" class="back_form_n">
				<p class="vhod">Вход в личный кабинет</p>
				<hr size="1px" color="#e5e5e5">
				<p class="form_name">Имя пользователя</p>
				<div class="form_name1"><input type="text" size="15" class="form_name2" name="username"></div>
				<p class="form_pas">Пароль</p>
				<div align="center" class="form_pas1"><input type="password" size="15" class="form_pas2" name="password"></div>
				<div><button name="submit" type="submit" class="form_button">Вход</button></div>
				<a onClick="enter_n()">X</a>
			</div>
</form>			

<!--
<p><input type="button" value="Проверить" onclick="left()"></p>

      <iframe class="asuright" 
	style="width:100%; float:left; transform : translate(50%, 0px) perspective(1500px) rotateY(90deg) scale3d(0.7, 0.7, 1);display:none;"
	src="asu2.php"  height="731px" align="left" frameborder="0" scrolling="no">
  </iframe>-->
 <iframe class="asucenter" style="float:left; width:100%" src="<?=base_url();?>php/asu1.php"  height="731px" align="left" frameborder="0" scrolling="no"></iframe>
  

  
 <!-- <iframe class="asuleft" 
	style="display:none"
	src="asu2.php" width="100%" height="731px" align="left" frameborder="0" scrolling="no">
  </iframe>-->
 
 
 
<div style="height:100%; width:100%; float:left;">
<div class="block"style="height:200px; width:300px; background-color:red; margin:0 auto;">Блок</div>
</div>
  



<script type="text/javascript">
function left(){
$(".asucenter").css({
	'transform' : 'translate(-50%,0px) perspective(1500px) rotateY(-90deg) scale3d(0.7, 0.7, 1)',
	'transition' : 'all 3s ease',
 });
 $(".asuright").css({
	'transform' : '',
	'transition' : 'all 3s ease',
	'display' : 'block',
 });
  $(".block").css({
 'background-color' : 'blue'
 });
} 
</script>
 
</body>
</html>