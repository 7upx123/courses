<?php

class Article
{
	var $id;
	var $title;
	var $content;

	//  Функция для вывода статьи
	function view() {
		echo "<h1>$this->title</h1><p>$this->content</p>";
	}
}

$a = new Article();

$a->id = 1;
$a->title = 'Сенаторы ограничат количество автомобилей с мигалками';
$a->content = 'В комитете Совета Федерации по промышленной политике подготовлен законопроект, содержащий исчерпывающий перечень транспортных средств, на которые могут быть установлены мигалки, сообщил РБК глава комитета сенатор Валентин Завадников.';

$a->view(); echo "<hr>";
