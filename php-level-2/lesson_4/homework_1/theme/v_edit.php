<h1>Редактировать статью</h1>
<form method="post">
	Название:
	<br>
	<input type="text" name="title" value="<?=$title_post?>">
	<br>
	<br>
	Содержание:
	<br>
	<textarea cols="25" rows="5" name="content"><?=$content_post?></textarea>
	<br>
	<br>
	<input type="submit" name="update_button" value="Изменить">
	<input type="submit" name="delete_button" value="Удалить">
</form>

</body>
</html>
