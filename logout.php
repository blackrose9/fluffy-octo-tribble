<?php 
	session_start();
	session_unset();
	unset($_SESSION['authlog']);
	session_destroy();
	header('Location: index.php');
?>