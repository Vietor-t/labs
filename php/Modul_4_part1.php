<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 4</h1>
<h2>Задание №4-1</h2>
<h3>Напишите функцию для суммирования произвольного количества чисел.
<br><br></h3>

<?php
function sum($input_arr)
{
	$s = 0;
	foreach ($input_arr as  $value) {
		$s += $value;
		//echo "$s<br>";
	}
	return $s;
}
function showSum($in)
{
	for ($i=0; $i < $in; $i++) {
	$arr[] = mt_rand(1, 99);
	}
	echo "<h3>Сгенерированный массив:</h3><br>";
	foreach ($arr as $key => $value) {
		echo "$value  ";
	}
	echo "<br><h3>Сумма: ".sum($arr)."</h3><br>";
}

if(isset($_POST['in']))
{
   showSum($_POST['in']);
}

echo '<form method="POST">
Кол-во чисел:
<input type="text" name="in">
<input type="submit" value="Отправить"><br><br>
</form>';
?>

<h2>Задание №4-2</h2>
<h3>Реализуйте функцию с тремя параметрами, где $arg1, $arg2 – значения аргументов. $operation – строка с названием операции. В зависимости от переданного значения операции выполните одну из арифметических операций.
<br>function mathOperation($arg1, $arg2, $operation)
<br><br></h3>

<?php
function mathOperation($arg1, $arg2, $operation)
{
	if ($operation == "+")
		echo "<h3>Сумма $arg1 и $arg2 =</h3> ".($arg1 + $arg2);
	elseif ($operation == "-") {
		echo "<h3>Разность $arg1 и $arg2 =</h3> ".($arg1 - $arg2);
	}elseif (($operation == "/") && $arg2 <> "0") {
		echo "<h3>Частное $arg1 и $arg2 =</h3> ".($arg1 / $arg2);
	}elseif ($operation == "*") {
		echo "<h3>Произведение $arg1 и $arg2 =</h3> ".($arg1 * $arg2);
	}
}

if(isset($_POST['inArg1']) && isset($_POST['inArg2']) && isset($_POST['inOperation']))
{
   mathOperation($_POST['inArg1'], $_POST['inArg2'], $_POST['inOperation']);
}

echo '<form method="POST">
  <table width="50%"  align="center">
    <tr>
      <td>
      	Аргумент 1:
      </td>
      <td>
      	<input type="text" name="inArg1">
      </td>
    </tr>
    <tr>
      <td>
      	Аргумент 2:
      </td>
      <td>
      	<input type="text" name="inArg2">
      </td>
    </tr>
    <tr>
      <td>
      	Операция("+", "-", "/", "*"):
      </td>
      <td>
      	<input type="text" name="inOperation">
      </td>
    </tr>
    <tr align="center">
      <td colspan="2">
        <input type="submit" value="Отправить">
      </td>
    </tr>
    <tr>
  </table>
</form>'
?>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
