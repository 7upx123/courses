<?php

class C_Editor extends C_Base
{
	private $articles;

	function __construct() {}

	protected function OnInput() {
		parent::OnInput();

		$model = M_Model::Instance();

		$this->title = $this->title . ' :: C_Editor';
		$this->articles = $model->articles_all();
	}

	protected function OnOutput() {
		$this->content = $this->Template('v/v_editor.php', $this->articles);
		parent::OnOutput();
	}
}
