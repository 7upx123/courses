<?php

//include_once 'm/M_model.php';
//include_once 'c/C_Base.php';

class C_New extends C_Base
{
	private $title_post;
	private $content_post;

	function __construct() {}

	protected function OnInput() {
		parent::OnInput();
		$this->title = $this->title . ' :: C_New';
		if ($this->IsPost()) {
			if (articles_new($_POST['title_post'], $_POST['content_post'])) {
				header('Location: index.php?c=editor.php');
				exit();
			}

			$this->title_post = $_POST['title_post'];
			$this->content_post = $_POST['content_post'];
		} else {
			$this->title_post = '';
			$this->content_post = '';
		}
	}

	protected function OnOutput() {
		$vars = array('title_post' => $this->title_post, 'content_post' => $this->content_post);
		$this->content = $this->Template('v/v_new.php', $vars);
		parent::OnOutput();
	}
}
