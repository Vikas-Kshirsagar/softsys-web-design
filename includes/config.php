<?php
	//connection to server
		$con =mysqli_connect("localhost","root","") or die("could not connect to server");
		
	//connection to database
		mysqli_select_db($con,"softsys") or die("could not connect to database");
		
		require_once("includes/validation.php");
		
	//session start
		session_start();
		
		session_name("auth");
		
?>		