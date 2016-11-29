<b><a href="new.php">Создать новую статью</a></b>
<ul>
	<? foreach ($vars as $article): ?>
		<li>
			<a href="edit.php?id=<?=$article['id_article']?>">
				<?=$article['title_article']?>
			</a>
		</li>
	<? endforeach ?>
</ul>
