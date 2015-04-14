<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 6</h1>
<h2>Задание №6-2</h2>
<h3>a) Выведите содержимое текущего каталога.<br>
b) Напишите функцию удаления произвольного каталога и всех его подкаталогов.
<br><br></h3>

<?php
function removeDir($rd)
{
  if (file_exists($rd)) {
    rmdir($rd);
    echo "Каталог ".$rd." успешно удален";
  }
  else echo "Ошибка удаления каталога";
}

if(isset($_POST['send']))
{
  $dir = opendir(".");
  while(($file = readdir($dir)) !== FALSE) echo "$file<br>";
  closedir($dir);
}

if(!empty($_POST['_dir']))
{
  removeDir($_POST['_dir']);
}

echo '<form method="POST">
<br><input type = "submit" name="send" value = "Отобразить содержимое"><br><br>
</form>';

echo '<form method="POST">
Каталог:<br>
<input type="text" name="_dir" placeholder = "Введите каталог"><br>
<input type = "submit" value = "Удалить"><br><br>
</form>';

 ?>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
