<?php

include_once 'inc/C_View.php';
include_once 'inc/C_Edit.php';

switch ($_GET['c']) {
	case 'edit':
		$controller = new C_Edit();
		break;

	default:
		$controller = new C_View();
		break;
}

$controller->Request();
