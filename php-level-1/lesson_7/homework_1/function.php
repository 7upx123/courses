<?php
	function check_dir($img_big = './img_big', $img_small = './img_small') {
		if (!file_exists($img_big))
			mkdir($img_big);
		if (!file_exists($img_small))
			mkdir($img_small);
	}
	function view_gallery($img_big = './img_big', $img_small = './img_small') {
		$sql = "SELECT * FROM pictures ORDER BY views DESC";
		$result = mysql_query($sql);
		if (!$result)
			die(mysql_error());
		$n = mysql_num_rows($result);
		$arr = array();
		for ($i = 0; $i < $n; $i++) {
			$row = mysql_fetch_assoc($result);
			$arr[] = $row;
		}

		/*for ($i = 0; $i < count($arr) - 1; $i++) {
			for ($j = $i + 1; $j < count($arr); $j++) {
				if ($arr[$i]['views'] < $arr[$j]['views']) {
					$tmp = $arr[$i]['views'];
					$arr[$i]['views'] = $arr[$j]['views'];
					$arr[$j]['views'] = tmp;
				}
			}
		}*/

		for ($i = 0; $i < count($arr); $i++) {
			$pic_id = $arr[$i]['id'];
			$path_pic_big = $arr[$i]['dir_big'] . '/' . $arr[$i]['name'];
			$path_pic_small = $arr[$i]['dir_small'] . '/' . $arr[$i]['name'];
			$pic_views = $arr[$i]['views'];

			$pic_big_php = "pic_big.php?
				id=$pic_id&
				path_pic_big=$path_pic_big&
				views=$pic_views";

			echo "<a href=\"$pic_big_php\" target=\"_blank\"><img src=\"$path_pic_small\" width=\"200\"></a>";
		}
	}

	function upload_files($types, $img_big = './img_big', $img_small = './img_small') {
		if (in_array($_FILES['picture']['type'], $types)) {
			copy($_FILES['picture']['tmp_name'], $img_big . "/" . $_FILES['picture']['name']);
			copy($_FILES['picture']['tmp_name'], $img_small . "/" . $_FILES['picture']['name']);
			$name = $_FILES['picture']['name'];
			$type = $_FILES['picture']['type'];
			$sql = "INSERT INTO pictures (name, type, dir_big, dir_small, views) VALUES ('$name', '$type', '$img_big', '$img_small', '0')";
			$result = mysql_query($sql);
			if (!$result)
				die(mysql_error());
		} else {
			echo "Файл не знагружен";
		}
	}

	function resize($picname) {
		return $picname;
	}
