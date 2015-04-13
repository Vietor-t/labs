<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 5</h1>
<h2>Задание №5-2</h2>
<h3>
Создать страницу для ввода имени пользователя (login) и пароля (passwd). Если пользователь вводит правильную пару (login/passwd), то сервер выдает страницу с сообщением, что доступ к секретным страницам открыт. Login предлагается выбирать из списка.
<br><br><br></h3>

<?php
$login = isset($_POST['login'])?$_POST['login']:'';
$passwd = isset($_POST['passwd'])?$_POST['passwd']:'';
	if($login != '' or $passwd != '')
	{
		if($login == 'Login' && $passwd == 'Password')
			echo 'Доступ разрешен';
		else
			echo 'Доступ запрещен!';
	}
	else
		echo 'Введите логин и пароль';

echo '<form method="POST">
<br>
Login:
<input type="text" name="login"/>
Password:
<input type="password" name="passwd"/>
<input type="submit" value="Отправить"/>
</form>';
 ?>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
