<?php

class C_Edit extends C_Base
{
	private $article;
	private $title_post;
	private $content_post;

	function __construct() {}

	protected function OnInput() {
		parent::OnInput();

		$model = M_Model::Instance();

		$this->title = $this->title . ' :: C_Edit';
		if ($this->IsPost()) {
			if (isset($_POST['update_button']) ) {
				if ($model->articles_edit($_GET['id'], $_POST['title_post'], $_POST['content_post'])) {
					header('Location: index.php?c=editor');
					exit();
				}
				$this->title_post = $_POST['title_post'];
				$this->content_post = $_POST['content_post'];
			} elseif (isset($_POST['delete_button'])) {
				if ($model->articles_delete($_GET['id'])) {
					header('Location: index.php?c=editor');
					exit();
				}
			}
		} else {
			$this->article = $model->articles_get($_GET['id']);
			$this->title_post = $this->article['title_article'];
			$this->content_post = $this->article['content_article'];
		}
	}

	protected function OnOutput() {
		$vars = array('title_post' => $this->title_post, 'content_post' => $this->content_post);
		$this->content = $this->Template('v/v_edit.php', $vars);
		parent::OnOutput();
	}
}
