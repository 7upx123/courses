<?php
// Шаблон редактора
// $text - текст статьи
// $error - текст ошибки (null, если нет ошибки)
?>

<form method="post">
	<? if ($error != null): ?>
		Ошибка: <b><?=$error?></b>
	<? endif ?>
	<textarea name="text"><?=$text?></textarea>
	<br>
	<input type="submit" value="Сохранить">
</form>
