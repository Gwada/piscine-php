<?php
	function connectToServer()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "password";

		$connection = mysqli_connect($dbhost, $dbuser, $dbpass) or die('error querying server');
		return $connection;
	}

	function connectToDB()
	{
		$dbhost = "localhost";
		$dbuser = "root";
		$dbpass = "password";
		$dbname = "fly_carpet";

		$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die('error querying database');
		return $connection;
	}
?>