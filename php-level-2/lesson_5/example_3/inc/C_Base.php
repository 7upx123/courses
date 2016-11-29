<?php

include_once('inc/Controller.php');

// Базовый контроллер сайта
abstract class C_Base extends Controller
{
	protected $title;		// заголовок страницы
	protected $content;		// содержание страницы

	// Конструктор
	function __construct() {}

	// Виртуальный обработчик запроса
	protected function OnInput() {
		$this->title = 'Название сайта';
		$this->content = '';
	}

	// Виртуальный генератор HTML
	protected function OnOutput() {
		$vars = array('title' => $this->title, 'content' => $this->content);
		$page = $this->Template('theme/v_main.php', $vars);
		echo $page;

		$bytes = strlen($page);
		echo "<!-- Размер страницы: $bytes б -->";
	}
}
