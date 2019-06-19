<?php
	
	session_start();

	if(!isset($_SESSION["login_step"]))
		$_SESSION["login_step"] = 1;

	if($_SESSION["login_step"] == 1)
		require("view/login/login.php");

	if($_SESSION["login_step"] == 2)
		require("view/login/confirm.php");

	if($_SESSION["login_step"] == 0)
		require("view/home/home.php");

?>