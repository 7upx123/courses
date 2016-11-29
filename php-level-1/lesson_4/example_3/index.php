<?php
	function show_list($news) {
		echo "<ul>";
		for ($i = 0; $i < count($news); $i++) {
			echo "<li>";
			echo "<a href=\"index.php?id=" . $i . "\">";
			echo $news[$i];
			echo "</a>";
			echo "</li>";
		}
		echo "</ul>";
	}
	function show_item($news, $id) {
		echo "<a href=\"index.php\">Вернуться к списку новостей</a>";
		echo "<br>";
		echo $news[$id];
		echo "<br>";
		echo "Много информации!";
	}
	$news = array();
	$news[0] = "За качество ответят...";
	$news[1] = "Варшава не раскрывает...";
	$news[2] = "Намерен добиться...";
	if (isset($_GET['id'])) {
		show_item($news, $_GET['id']);
	} else {
		show_list($news);
	}
