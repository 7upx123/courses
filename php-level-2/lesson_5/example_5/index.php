<?php

include_once 'c/C_View.php';
include_once 'c/C_Edit.php';

switch ($_GET['c']) {
	case 'edit':
		$controller = new C_Edit();
		break;

	default:
		$controller = new C_View();
		break;
}

$controller->Request();
