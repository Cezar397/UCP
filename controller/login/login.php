<?php
	
	session_start();

	if($_SESSION["login_step"] == 1)
		require("login-step1.php");

	if($_SESSION["login_step"] == 2)
		require("login-step2.php");


	
?>