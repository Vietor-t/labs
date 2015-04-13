<?php include('bloks/Head.html');
include('bloks/Menu.html'); ?>
<!-- content -->
<br>
<?php
$textFild = 3;
if (!empty($_POST['col_filds'])) {
	$textFild = $_POST['col_filds'];
	echo "Введите название";
	echo '<form method="POST" action="ScrModul_5.php">';
	for ($i=0; $i < $textFild; $i++) {
		echo "<input type=\"text\" name=\"efield".$i."\" placeholder = \"Введите название поля\"><br>";
	}
	echo '<input type = "submit" value = "Отправить"><br><br>
	 </form>';
	// unset($_POST['col_filds']);
}

if (isset($_POST['efield0'])) {
	echo '<form method="POST" action="ScrModul_5.php">';
	for ($i=0; $i < $textFild; $i++) {
		$fl = "efield".$i."";
		echo "$_POST[$fl]";
		echo "<input type=\"text\" name=\"field".$i."\" placeholder = \"Введите текст\"><br>";
		// unset($_POST['$fl']);
	}
	echo '<input type = "submit" value = "Отправить"><br><br>
	 </form>';
}

if (isset($_POST['field0'])) {
	echo "Введеный текст:<br>";
	for ($i=0; $i < $textFild; $i++) {
		echo "Поле ".($i+1).": ";
		$fl = "field".$i."";
		echo "$_POST[$fl] <br>";
	}
}

?>
<!-- content -->
<?php include('bloks/Footer.html'); ?>
