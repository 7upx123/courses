<?php

session_start();

if (!isset($_SESSION['username']) && isset($_COOKIE['username'])) {
	$_SESSION['username'] = $_COOKIE['username'];
}

$username = $_SESSION['username'];

if ($username == null) {
	//echo "username == null -> login.php";
	header("Location: login.php");
	exit();
} else {
	if (!isset($_SESSION['page']) && $_COOKIE['page']) {
		$_SESSION['page'] = $_COOKIE['page'];
	}
	$page = $_SESSION['page'];
	if ($page == null) {
		//echo "page = null -> a.php";
		header("Location: a.php");
		exit();
	}
	//echo "page != null -> $page.php";
	header("Location: $page.php");
	exit();
}

?>
