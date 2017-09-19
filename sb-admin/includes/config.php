<?php
	//connection to server
	mysql_connect("localhost","root", "") or die("could not connect to server");
	
	//connection to database
	  mysql_select_db("softsys") or die("could not connect to database");
	
	//session start
		session_start();
		
		session_name("auth");
	 
?>		