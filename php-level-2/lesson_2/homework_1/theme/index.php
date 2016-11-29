<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index.php</title>
</head>
<body>

<h1>index.php</h1>
<b>Главная</b> |
<a href="editor.php">Консоль редактора</a>
<hr>
<h1>Статьи</h1>
<hr>
<ul>
	<? foreach ($articles as $article): ?>
	<li>
		<a href="article.php?id=<?=$article['id_article']?>">
			<h3><?=$article['title_article']?></h3>
		</a>
		<?=$article['content_article']?>
	</li>
	<? endforeach ?>
</ul>

</body>
</html>
