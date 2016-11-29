<h1>Статьи</h1>
<hr>
<ul>
	<? foreach ($vars as $article): ?>
		<li>
			<p>
				<a href="index.php?c=article&id=<?=$article['id_article']?>">
					<?=$article['title_article']?><br>
				</a>
				<?=$article['content_article']?>
			</p>
		</li>
	<? endforeach ?>
</ul>
