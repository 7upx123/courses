<?php

abstract class C_Base extends C_Controller
{
	protected $title;		// заголовок страницы
	protected $content;		// содержание страницы

	function __construct() {}

	protected function OnInput() {

		//$model = M_Model::Instance();

		$this->title = 'PHP ';
		$this->content = '';
	}

	protected function OnOutput() {
		$vars = array('title' => $this->title, 'content' => $this->content);
		$page = $this->Template('v/v_main.php', $vars);

		echo $page;
	}
}
