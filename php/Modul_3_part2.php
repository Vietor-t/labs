<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 3</h1>
<br><h2>Задание №3-3</h2>
<h3>
Объявите массив, где в качестве ключей будут использоваться названия
стран, а в качестве значений – массивы со значениями городов из
соответствующей страны. Формат вывода следующий, оформление по
желанию:</h3>

<?php
$arr4 = array("Россия" => array("Ростов-на-дону", "Москва", "Санкт-Петербург", "Томск"),
	"Германия" => array("Берилин", "Мюнхен", "Гамбург", "Дрезден"),
	"Италия" => array("Рим", "Неаполь", "Венеция", "Флоренция"));
foreach ($arr4 as $key => $value) {
	echo "<br><h3>$key</h3>"."";
	foreach ($value as $key2 => $value2) {
		echo ("$value2 ");
	}
	echo("<br>");
}
?>


<br><h2>Задание №3-4</h2>
<h3>
1.	Создайте массив для хранения информации о сотрудниках (имя, фамилия, возраст, адрес, телефон, выручка за день). <br>
2.	Выведите данные на экран в табличном виде. Оформите таблицу по своему желанию.<br>
3.	Подсчитайте суммарную выручку за день<br>
<br><br></h3>

<?php
$arr5 = array('Имя' => array("Александр", "Алексей", "Николай", "Олег"),
	'Фамилия' => array("Новиков", "Бодров", "Хмельницкий", "Несторов"),
	'Возраст' => array("35", "28", "28", "44"),
	'Адрес' => array("ул. Ленина", "пр. Ворошиловский 61", "ул. Социалистическая 25", "ул. Петровка 11"),
	'Телефон' => array("125-89-63", "256-89-63", "100-54-34", "330-80-63"),
	'Выручка' => array("5000", "3500", "3500", "5035"));

echo "<h3>Информация о сотрудниках</h3><br>";

echo '<table border="1";" width="500px"><thead><tr>';
(integer)$s = 0;
foreach ($arr5 as $key => $val) {
	echo "<th>$key";
	foreach ($val as $key => $value) {
	$s += $value;
}
}
echo "</tr></thead>";
$i = 0;
foreach ($arr5 as $key1 => $value1)
{
	echo "<tr>";
	foreach ($arr5 as $key2 => $value2)
	{
		if ($i == 4)
		{
			break(2);
		}
		echo "<td>$value2[$i]</td>";
	}
	echo "</tr>";
	$i++;
}
$sum = 0;
foreach( $arr5['Выручка'] as $value) {
		$sum += $value;
}

echo "</table><br><h3>Суммарная выручка за день: $sum<h3><br><br><br>";
?>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
