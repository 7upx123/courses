<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>edit.php</title>
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

<h1>edit.php</h1>
<a href="index.php">Главная</a> |
<a href="editor.php">Консоль редактора</a>
<hr>
<h1>Редактировать статью</h1>
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
	<input type="submit" name="update_button" value="Изменить">
	<input type="submit" name="delete_button" value="Удалить">
</form>

</body>
</html>
