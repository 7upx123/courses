<?php

//include_once 'm/M_model.php';
//include_once 'c/C_Base.php';

class C_Editor extends C_Base
{
	private $articles;

	function __construct() {}

	protected function OnInput() {
		parent::OnInput();
		$this->title = $this->title . ' :: C_Editor';
		$this->articles = articles_all();
	}

	protected function OnOutput() {
		$this->content = $this->Template('v/v_editor.php', $this->articles);
		parent::OnOutput();
	}
}
