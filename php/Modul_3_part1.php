<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br><h1>Модуль 3</h1>
<h2>Задание №3-1</h2>
<h3>
1.	Создайте массив имен. В случае, если в этом массиве присутствует имя Вася выведите на экран номера вхождений<br>
2.	Оставьте в массиве только одного Васю, всех остальных уберите<br>
3.	Избавьтесь от последнего Васи <br>
4.	Выполните сортировку полученного массива<br>
<br><br></h3>

<?php
$arr = array("Яна", "Петр", "Сергей", "Вася", "Катя", "Люся", "Вася",);
echo "<h3>Исходный массив:</h3>";
foreach ($arr as $key => $value) {
	echo "Ключ:".$key." Имя: ".$value.".<br>";
}
echo "<h3>Ключи:</h3>";
foreach ($arr as $key => $value) {
	if ($value == "Вася") {
		echo $key." ";
	}
}
echo "<br><br><h3>Преобразованный массив[2]:</h3>";
foreach (array_unique($arr) as $value) {
	echo $value."<br>";
}
echo "<br>";
foreach ($arr as $key => $value) {
	if ($value == "Вася") {
		unset($arr[$key]);
	}
}
echo "<br><h3>Преобразованный массив[3]:</h3>";
foreach ($arr as $value) {
	echo $value."<br> ";
}
sort($arr);
echo "<br><h3>Сортировка массива:</h3>";
foreach ($arr as $value) {
	echo $value."<br> ";
}
?>


<br><h2>Задание №3-2</h2>
<h3>
Приведите примеры работы функций array_slise, array_chunk.
<br><br></h3>

<?php
$arr2 = array("декабрь", "январь", "февраль", "март", "апрель", "май", "июнь", "июль", "август", "сентябрь", "октябрь", "ноябрь");
$season = array_chunk($arr2, 3);
$mounth = array("Зима","Весна","Лето","Осень");
echo "<h3>Пример работы функций array_chunk:<br></h3>";
foreach ($season as $key => $value) {
	echo "<h3>$mounth[$key]:</h3> <ul>";
	foreach ($value as $val) {
		echo "<li> $val";
	}
	echo "</ul>";
}

$arr3 = array("Первый", "Второй", "Третий", "Четвертый", "Пятый", "Шестой", "Седьмой", "Восьмой", "Девятый");
echo "<h3>Пример работы функций array_slise:<br></h3>";
echo "Исходный массив: ";
$arr3 = array("1", "2", "3", "4", "5");
foreach ($arr3 as $value) {
	echo "$value ";
	}
echo "<br> Вывод 2-х элементов с 3-го элемента: ";
$arrOut = array_slice($arr3, 2, 2);
foreach ($arrOut as $value) {
	echo "$value ";
	}
echo "<br> Вывод 2-х элементов с конца с 1-го элемента: ";
$arrOut = array_slice($arr3, -2, 2);
foreach ($arrOut as $value) {
	echo "$value ";
	}
?>
<br><br>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
