<?php

include_once 'inc/model.php';
include_once 'inc/C_Base.php';

// Контроллер страницы редактирования
class C_Edit extends C_Base
{
	private $text;

	// Конструктор
	function __construct() {}

	// Виртуальный обработчик запроса
	protected function OnInput() {
		parent::OnInput();
		$this->title = $this->title . ' :: Редактирование';

		if ($this->IsPost()) {
			$text = $_POST['text'];
			text_set($text);
			header('Location: index.php');
			exit();
		}

		$this->text = text_get();
	}

	// Виртуальный генератор HTML
	protected function OnOutput() {
		$vars = array('text' => $this->text);
		$this->content = $this->Template('theme/v_edit.php', $vars);
		parent::OnOutput();
	}
}
