<?php

include_once('c/Controller.php');

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
		$page = $this->Template('v/v_main.php', $vars);
		echo $page;
	}
}
