<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>editor.php</title>
</head>
<body>

<h1>editor.php</h1>
<a href="index.php">Главная</a> |
<b>Консоль редактора</b>
<hr>
<b><a href="new.php">Создать новую статью</a></b>
<ul>
	<? foreach ($articles as $article): ?>
		<li>
			<a href="edit.php?id=<?=$article['id_article']?>">
				<?=$article['title_article']?>
			</a>
		</li>
	<? endforeach ?>
</ul>

</body>
</html>
