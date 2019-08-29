<?php


	$host = "127.0.0.1";
	$database = "clonem";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($host, $username, $password, $database);

	if (!$conn){
		die("Connection failed: " . mysqli_connect_error());
	}

?>