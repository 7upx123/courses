<?php

include_once 'inc/model.php';
include_once 'inc/C_Base.php';

// Конттроллер страницы чтения
class C_View extends C_Base
{
	private $text;

	// Конструктор
	function __construct() {}

	// Виртуальный обработчик запроса
	protected function OnInput() {
		parent::OnInput();
		$this->title = $this->title . ' :: Чтение';
		$this->text = text_get();
	}

	// Виртуальный генератор HTML
	protected function OnOutput() {
		$vars = array('text' => $this->text);
		$this->content = $this->Template('theme/v_view.php', $vars);
		parent::OnOutput();
	}
}
