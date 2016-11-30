<?php

//include_once 'm/M_Model.php';
//include_once 'c/C_Base.php';

class C_View_Intro extends C_Base
{
	private $articles;

	function __construct() {}

	protected function OnInput() {
		parent::OnInput();

		$model = M_Model::Instance();

		$this->title = $this->title . ' :: C_View_Intro';
		$this->articles = $model->articles_all();
		foreach ($this->articles as $key => $article) {
			$this->articles[$key]['content_article'] = $model->articles_intro($article['content_article']);
		}
	}

	protected function OnOutput() {
		$this->content = $this->Template('v/v_view_intro.php', $this->articles);
		parent::OnOutput();
	}
}