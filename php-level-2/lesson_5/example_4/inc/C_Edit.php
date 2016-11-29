<?php

include_once 'inc/model.php';
include_once 'inc/C_Base.php';

// Контроллер страницы редактирования
class C_Edit extends C_Base
{
	private $text;
	private $error;

	// Конструктор
	function __construct() {}

	// Виртуальный обработчик запроса
	protected function OnInput() {
		parent::OnInput();
		$this->title = $this->title . ' :: Редактирование';

		if ($this->IsPost()) {
			$text = $_POST['text'];
			if (strpos($text, '<') !== false) {
				// неудачная отправка формы
				$this->text = $text;
				$this->error = 'Текст не должен содержать теги';
			} else {
				text_set($text);
				header('Location: index.php');
				exit();
			}
		} else {
			// запрос формы
			$this->text = text_get();
		}
	}

	// Виртуальный генератор HTML
	protected function OnOutput() {
		$vars = array('text' => $this->text, 'error' => $this->error);
		$this->content = $this->Template('theme/v_edit.php', $vars);
		parent::OnOutput();
	}
}
