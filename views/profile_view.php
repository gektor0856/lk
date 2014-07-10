<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>Редактирование</title>
</head>
<body>
<center>Изменить данные<br />
<form  action="<?=base_url()?>index.php/input/gateway"  method="post"> <!--CController::createUrl('Updateinfo') -->
  <p>Имя:<br />
  <input name="name"  type="text"  maxlength="15" /></p>
  <p>Фамилия:<br />
  <input name="firstname"  type="text" maxlength="25" /></p>
  <p>О себе:<br /><textarea name="me" cols="65" rows="10" style="resize: none;" class="text" maxlength="300"></textarea></p> <br />
  <input type="submit" value="Изменить" name="button" class="button">
  </form>
<!--<a href ="=CController::createUrl('index')">На главную</a>-->
</center>
</body>
</html>