<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>new.php</title>
	<style type="text/css">
		input[type=text] {
			width: 500px;
		}
		textarea {
			width: 500px;
			height: 300px;
		}
	</style>
</head>
<body>

<h1>new.php</h1>
<a href="index.php"></a>Главная</a> |
<a href="editor.php">Консоль редактора</a>
<hr>
<h1>Новая статья</h1>
<form method="post">
	Название:
	<br>
	<input type="text" name="title" value="<?=$title?>">
	<br>
	<br>
	Содержание:
	<br>
	<textarea cols="25" rows="5" name="content"><?=$content?></textarea>
	<br>
	<br>
	<input type="submit" value="Добавить">
</form>

</body>
</html>
