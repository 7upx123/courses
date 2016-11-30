<?php

//include_once 'm/M_model.php';
//include_once 'c/C_Base.php';

class C_View_Article extends C_Base
{
	private $article;

	function __construct() {}

	protected function OnInput() {
		parent::OnInput();

		$model = M_Model::Instance();

		$this->title = $this->title . ' :: C_View_Article';
		$this->article = $model->articles_get($_GET['id']);
	}

	protected function OnOutput() {
		$this->content = $this->Template('v/v_view_article.php', $this->article);
		parent::OnOutput();
	}
}