<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 4</h1>
<h2>Задание №4-4</h2>
<h3>1)	Создайте ассоциативный массив menu, где ключом является пункт меню (Главная, Контакты…), а значением-ссылка на файл (index.php, contact.php..)<br>
2)	Реализуйте функцию getMenu<br>
•	Первый аргумент – массив, содержащий структуру меню<br>
•	Второй аргумент vertical со значением по умолчанию true, указывающий, как будет отрисовано меню- вертикально, либо горизонтально в противном случае:<br>
3)	Отрисуйте вертикальное и горизонтальные меню<br>
<br><br></h3>
<?php include('FuncModul_4.php'); ?>
<?php
$arrMenu = array("Главная" => "index.php", "Модуль 1" => "Modul_1.php", "Модуль 2" => "Modul_2.php");

if(isset($_POST['menu']))
{
	getMenu($arrMenu, $_POST['menu']);
}
echo '<form method="POST">
<br><select name="menu" size="1">
 <option value="g">Горизонтально</option>
 <option value="v">Вертикально</option>
 <option selected value="gv">По умолчанию</option>
</select><br>
<input type="submit" value="Отрисовать"><br><br>
</form>';
?>

<br><h2>Задание №4-5</h2>
<h3>Вынесите все описания функций в отдельный файл и подключите его с использованием конструкции include.<br>
<br><br></h3>
Описание функции вынесено в файл: FuncModul_4.php
<!-- content -->
<?php include('bloks/Footer.html'); ?>
