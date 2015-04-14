<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 6</h1>
<h2>Задание №6-1</h2>
<h3>Написать «Гостевую книгу» с сохранением данных переданных пользователем в
текстовый файл. Данные должны храниться в виде строки по принципу: одна строка –
один пользователь. Затем осуществите вывод на экран всех строк файла с порядковым номером строки (последний пользователь должен показываться первым) и размер файла в байтах.
<br><br></h3>

<?php
$f = 'journal.txt';
function writeFile($t1, $t2)
{
  global $f;
  if (file_exists($f)) {
    $fl = fopen($f, 'a');
    fwrite($fl, $t1."\n");
    fwrite($fl, $t2."\n");
    fclose($fl);
  }else{
    $fl = fopen($f, 'w');
    fwrite($fl, $t1."\n");
    fwrite($fl, $t2."\n");
    fclose($fl);
  }
}

if(!empty($_POST['name_fild']) && !empty($_POST['surname_fild']))
{
  writeFile($_POST['name_fild'], $_POST['surname_fild']);
  // unset($_POST['name_fild']);
  // unset($_POST['surname_fild']);
  header('Location: '.$_SERVER['PHP_SELF']);
  die();
}

echo "<h3>Заполните форму:<br></h3>";
echo '<form method="POST">
Имя:<br>
<input type="text" name="name_fild" placeholder = "Введите имя"><br>
Фамилия:<br>
<input type="text" name="surname_fild" placeholder = "Введите фамилию"><br>
<input type = "submit" value = "Отправить"><br><br>
</form>';

if (file_exists($f)) {
  $fl = fopen($f, 'r');
  $ofl = file($f);
  $counter = count($ofl);
  // for ($i=0; $i < $counter; $i += 2) {
  //   echo ($i/2+1).". ";
  //   echo "$ofl[$i]";
  //   $j = $i+1;
  //   echo "$ofl[$j]<br>";
  // }
  for ($i = $counter-1, $k = 0; $i > 0; $i -= 2, $k++) {
    echo ($k+1).". ";
    $j = $i-1;
    echo "$ofl[$j]";
    echo "$ofl[$i]<br>";
  }
  echo "<br>Размер файла: ".filesize($f)." байт";
}else {
  echo "Пусто...";
}
 ?>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
