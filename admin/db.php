<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "nmda";


	//Create connection
	$con = new mysqli($servername, $username, $password, $db);

	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	} 
	
?>