<?php  
	session_start();
	$_SESSION['login']=0;
	unset($_SESSION['login']);
	header("location: ../index.php");

?>