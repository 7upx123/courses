<b>Таблица</b> | <a href="index.php?view=list">Список</a>

<br><br>

<table>
	<tr>

		<?php
		$i = 0;
		foreach ($photos as $photo): ?>

			<?php if ($i % 4 == 3): ?>
				</tr><tr>
			<?php  endif; ?>

			<td>
				<a href="photo.php?id=<?=$photo['id']?>"><img src="<?=gallery_icon($photo)?>"></a>
			</td>

			<?php $i++; ?>

		<?php endforeach ?>

	</tr>
</table>

<br><br>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="photo">
	<br>
	<input type="submit" value="Загрузить файл">
</form>