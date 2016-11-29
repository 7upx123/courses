<?php
	function check_dir($img_big = './img_big', $img_small = './img_small') {
		if (!file_exists($img_big))
			mkdir($img_big);
		if (!file_exists($img_small))
			mkdir($img_small);
	}

	function view_gallery($img_small = './img_small', $img_big = './img_big', $width_picture = 200, $column = 4) {
		resize($width_picture);
		$handle = opendir($img_small);
		if ($handle) {
			while (($file = readdir($handle)) !== false) {
				if ($file != '.' && $file != '..') {
					$path_small = $img_small . '/' . $file;
					$path_big = $img_big . '/' . $file;
					echo "<a href=\"$path_big\" target=\"_blank\"><img src=\"$path_small\" width=\"$width_picture\"></a>";
				}
			}
			closedir($handle);
		}
	}

	function upload_files($types, $img_big = './img_big', $img_small = './img_small') {
		if (in_array($_FILES['picture']['type'], $types)) {
			copy($_FILES['picture']['tmp_name'], $img_big . "/" . $_FILES['picture']['name']);
			copy($_FILES['picture']['tmp_name'], $img_small . "/" . $_FILES['picture']['name']);
			return true;
		} else {
			//echo "Файл не знагружен";
			return false;
		}
	}

	function resize($width = 200) {
		return $width;
	}
