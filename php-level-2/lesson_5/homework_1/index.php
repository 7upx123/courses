<?php

require_once 'm/M_dbconnect.php';
require_once 'm/M_model.php';

/*
require_once 'c/C_View_Intro.php';
require_once 'c/C_View_Article.php';
require_once 'c/C_Editor.php';
require_once 'c/C_New.php';
require_once 'c/C_Edit.php';
*/

function __autoload($classname) {
	$type = explode('_', $classname);
	switch ($type[0]) {
		case 'M':
			include_once "m/$classname.php";
			break;
		case 'C':
			include_once "c/$classname.php";
			break;
		default:
			header('Location: index.php');
			exit();
	}

}

switch ($_GET['c']) {
	case 'article':
		$controller = new C_View_Article();
		break;
	case 'editor';
		$controller = new C_Editor();
		break;
	case 'new':
		$controller = new C_New();
		break;
	case 'edit':
		$controller = new C_Edit();
		break;
	default:
		$controller = new C_View_Intro();
		break;
}

$controller->Request();
