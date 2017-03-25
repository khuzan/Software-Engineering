<?php
	session_start();
	include 'function.php';
	$db = connect();

	if (empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}
	array_push($_SESSION['cart'], $_GET['id']);
	header('Location:../checkout.php');
?>
