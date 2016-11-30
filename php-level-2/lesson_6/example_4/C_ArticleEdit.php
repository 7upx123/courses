<?php

// Контроллер страницы просмотра статьи
class C_ArticleEdit extends C_Base
{
	private $article; // статья

	function __construct() {
		$this->article = array();
	}

	// Виртуальный обработчик запроса
	protected function OnInput() {
		parent::OnInput();

		$mArticles = new M_Articles::Instance(); // *

		if ($this->IsPost()) {
			if (isset($_POST['save'])) {
				if ($mArticles->Edit($_GET['id'], $_POST['title'], $_POST['content'])) {
					header('Location: index.php?c=editor');
					die();
				}
			}

			if (isset($_POST['delete'])) {
				if ($mArticles->Delete($_GET['id'])) {
					header('Location: index.php?c=editor');
					die();
				}
			}

			$this->article['title'] = $_POST['title'];
			$this->article['content'] = $_POST['content'];
		} else {
			$this->article = $mArticles->Get($_GET['id']);
		}

		$this->title .= '::Редактирование статьи::' . $this->article['title'];
	}

	// Виртуальный генератор HTML
	protected function OnOutput() {
		// Шаблон меню
		$vars_menu = array(
			'select_item' => 0,
			'items' => C_Base::GetMenuItems());

		$this->menu = $this->Template('tpl_menu.php', $vars_menu);

		// Основной шаблон страницы
		$vars_content = array(
			'title' => $this->article['title'],
			'content' => $this->article['content']
		);

		$this->content = $this->Template('tpl_edit.php', $vars_content);
		parent::OnOutput();
	}
}
