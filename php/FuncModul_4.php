<?php
function getMenu($arr, $l)
{
	echo "<div id=\"menuBar\"><ul class = \"menuList\">";
	if ($l == "gv") {
		echo "<li><a href=\"\">Вертикальное меню</a><ul>";
		foreach ($arr as $key => $value) {
			echo "<li><a href=\"$value\">$key</a></li>";
		}
		echo "</ul></li>";
		foreach ($arr as $key => $value) {
			echo "<li><a href=\"$value\">$key</a></li>";
		}
	}
	if ($l == "v") {
		echo "<li><a href=\"\">Вертикальное меню</a><ul>";
		foreach ($arr as $key => $value) {
			echo "<li><a href=\"$value\">$key</a></li>";
		}
		echo "</ul></li>";
	}
	if ($l == "g") {
		foreach ($arr as $key => $value) {
			echo "<li><a href=\"$value\">$key</a></li>";
		}
	}
	echo "</div>";
}
 ?>
