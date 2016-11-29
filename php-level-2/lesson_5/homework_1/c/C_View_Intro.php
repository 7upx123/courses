<?php

//include_once 'm/M_model.php';
//include_once 'c/C_Base.php';

class C_View_Intro extends C_Base
{
	private $articles;

	function __construct() {}

	protected function OnInput() {
		parent::OnInput();
		$this->title = $this->title . ' :: C_View_Intro';
		$this->articles = articles_all();
		foreach ($this->articles as $key => $article) {
			$this->articles[$key]['content_article'] = articles_intro($article['content_article']);
		}
	}

	protected function OnOutput() {
		$this->content = $this->Template('v/v_view_intro.php', $this->articles);
		parent::OnOutput();
	}
}
