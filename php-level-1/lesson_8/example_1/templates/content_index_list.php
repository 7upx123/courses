<a href="index.php?view=table">Таблица</a> | <b>Список</b>

<br><br>

<?php foreach ($photos as $photo): ?>

	<a href="photo.php?id=<?=$photo['id']?>"><img src="<?=$photo['id'] . '.' . $photo['type']?>"></a>
	<br>

<?php endforeach ?>

<br><br>

<form method="post" enctype="multipart/form-data">
	<input type="file" name="photo">
	<br>
	<input type="submit" value="Загрузить файл">
</form>