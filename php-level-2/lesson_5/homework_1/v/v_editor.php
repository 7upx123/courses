<b><a href="index.php?c=new">Создать новую статью</a></b>
<ul>
	<? foreach ($vars as $article): ?>
		<li>
			<a href="index.php?c=edit&id=<?=$article['id_article']?>">
				<?=$article['title_article']?>
			</a>
		</li>
	<? endforeach ?>
</ul>
<hr>
