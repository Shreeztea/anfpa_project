<?php

$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "anfpa";


	//Create connection
	$con = new mysqli($servername, $username, $password, $db);

	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	} 


	// $servername = "localhost";
	// $username = "salapabikasbank_salapabikasbank";
	// $password = "6liP*zuMwUD*";
	// $db = "salapabikasbank_nmda";


	// //Create connection
	// $con = new mysqli($servername, $username, $password, $db);
	
    // mysqli_set_charset($con,"utf8");

	//if ($con->connect_error) {
	    //die("Connection failed: " . $con->connect_error);
	//} 
	
	
?>