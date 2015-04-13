<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 5</h1>
<h2>Задание №5-1</h2>
<h3>
Получите (и отобразите) данные из:<br>
•	Текстового поля<br>
•	Многострочного поля <br>
•	Выключателя (checkbox)<br>
•	Переключателя (radio button)<br>
•	Списка<br><br><br></h3>
<?php
function getText($value)
{
  echo "Текстовое поле: $value";
}
function getTA($value)
{
  echo "Многострочное поле: $value";
}
function getCB($arr)
{
  echo "Выключатель:<br>";
  foreach ($arr as $key => $value) {
    echo "Пункт: ".($key + 1)." <br>";
  }
}
function getLS($value)
{
  echo "Список:<br> Выбран пункт ".($value + 1)." ";
}

if(isset($_POST['_text']))
{
  getText($_POST['_text']);
}
if(isset($_POST['_ta']))
{
	getTA($_POST['_ta']);
}
if(isset($_POST['_cb']))
{
	getCB($_POST['_cb']);
}
if(isset($_POST['_rb']))
{
  echo "Переключатель:<br>";
  echo "Был выбран пункт №";
  if ($_POST['_rb']==="1") {
    echo "1";
  }
  if ($_POST['_rb']==="2") {
    echo "2";
  }
  if ($_POST['_rb']==="3") {
    echo "3";
  }
}
if(isset($_POST['ls']))
{
	getLS($_POST['ls']);
}

echo '<form method="POST">
<br>
<input type="text" name="_text" placeholder = "Введите текст"><br>
<input type = "submit" value = "Отправить"><br><br>
</form>';

echo '<form method="POST">
<br><textarea name = "_ta" rows = "5" cols = "25" placeholder = "Введите текст"></textarea><br>
<input type = "submit" value = "Отправить"><br><br>
</form>';

echo '<form method="POST">
<br>
<label><input name="_cb[0]" type="checkbox">Пункт 1</label><br>
<label><input name="_cb[1]" type="checkbox">Пункт 2</label><br>
<label><input name="_cb[2]" type="checkbox">Пункт 3</label><br>
<label><input name="_cb[3]" type="checkbox">Пункт 4</label><br>
<input type = "submit" value = "Отправить"><br><br>
</form>';

echo '<form method="POST">
<br>
<label><input name="_rb" type="radio" value="1">Пункт 1</label><br>
<label><input name="_rb" type="radio" value="2">Пункт 2</label><br>
<label><input name="_rb" type="radio" value="3">Пункт 3</label><br>
<input type = "submit" value = "Отправить"><br><br>
</form>';

echo '<form method="POST">
<br><select name="ls" size="1">
 <option selected value="0">Пункт 1</option>
 <option value="1">Пункт 2</option>
 <option value="2">Пункт 3</option>
</select>
<input type = "submit" value = "Отправить"><br><br>
</form>';
?>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
