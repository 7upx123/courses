<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$title?></title>
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

<h1><?=$filename?></h1>

<a href="index.php">Главная</a> |
<a href="editor.php">Консоль редактора</a>
<hr>

<?=$content?>

</body>
</html>
