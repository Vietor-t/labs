<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 4</h1>
<h2>Задание №4-3</h2>
<h3>1)	Реализуйте функцию для вычисления таблицы умножения. Отрисуйте таблицу с разными параметрами.<br>
function getTable($cols, $rows, $color)<br>
2)	Измените параметры функции getTable() на параметры по умолчанию<br>
3)	Отрисуйте таблицу умножения, вызывая функцию getTable<br>
a.	Без параметров<br>
b.	С одним параметром<br>
c.	С двумя параметрами<br>
<br><br></h3>

<?php
if ($_POST &&  !empty($_POST['_row']) && !empty($_POST['_col']) && !empty($_POST['_color'])) {
	showTable($_POST['_row'], $_POST['_col'], $_POST['_color']);
}elseif($_POST &&  empty($_POST['_row']) && empty($_POST['_col']) && empty($_POST['_color']))
{
   showTable();
}elseif ($_POST &&  (empty($_POST['_row']) or empty($_POST['_col']) or empty($_POST['_color']))) {
	showTable($_POST['_row'], $_POST['_col'], $_POST['_color']);
}
echo '<form method="POST">
Столбцы:
<input type="text" name="_row">
Строки:
<input type="text" name="_col">
Цвет:
<input type="text" name="_color">
<input type="submit" value="Отправить"><br><br>
</form>';

function showTable($col = 8, $row = 8, $color = "green")
{
	echo "<h3>Таблица умножения</h3>";
	echo '<table style="padding:10px;" width="500px"><tr>';
	if ((($col <= 1) or ($col >= 11)) && (($row <= 1) or ($row >= 11))) {
		$col = 10;
		$row = 10;
		echo "<br>Максимальный размер таблицы:[10][10]. Было установлено значение по умолчанию - 10.";
	}
	if ((($col <= 1) or ($col >= 11)) && (($row > 1) or ($row < 11))) {
		$col = 10;
	}
	if ((($row <= 1) or ($row >= 11)) && (($col > 1) or ($col < 11))) {
		$row = 10;
	}
	for ($i=1; $i <= $row; $i++)
	{
		for ($j=1; $j <= $col; $j++)
		{
			if (($i == 1) or ($j == 1)){
			 	echo '<td bgcolor="'.$color.'" style="border:1px solid white;" align="center">'.($i * $j)."</td>";
			 }elseif ($i%2 != 0) {
			 	echo '<td bgcolor="'.$color.'" style="border:1px solid white;">'.($i * $j)."</td>";
			 }else
			 {
			 	echo '<td bgcolor="'.$color.'" style="border:1px solid white;">'.($i * $j)."</td>";
			 }
		}
		if ($i != $row)
		{
			echo '</tr><tr>';
		}
	};
	echo "</tr></table>";
}
?>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
