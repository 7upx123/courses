<h1>Статьи</h1>
<hr>
<ul>
	<? foreach ($vars as $article): ?>
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
