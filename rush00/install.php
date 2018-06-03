<?php
	include("srcs/dbConnection.php");

	$connection = connectToServer();
	if (mysqli_connect_errno()) {		
		exit ;
	}

	$createDB = "CREATE DATABASE fly_carpet;";
	mysqli_query($connection, $createDB);
	mysqli_close($connection);

	$connection = connectToDB();

	$createTable = "CREATE TABLE `users` (
  `login` varchar(255) NOT NULL,
  `passwd` varchar(255) NOT NULL,
  `user_group` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	mysqli_query($connection, $createTable);


	$createTableItems = "CREATE TABLE `items` (`reference` varchar(255) NOT NULL, `name` varchar(255) NOT NULL, `couleur` varchar(255) NOT NULL, `prix` int(11) NOT NULL, `quantite` int(11) NOT NULL,`categorie` varchar(255) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8;";
	mysqli_query($connection, $createTableItems);

	$insertAdmin = "INSERT INTO `users` (`login`, `passwd`, `user_group`) VALUES
('admin', '6a4e012bd9583858a5a6fa15f58bd86a25af266d3a4344f1ec2018b778f29ba83be86eb45e6dc204e11276f4a99eff4e2144fbe15e756c2c88e999649aae7d94', 'admin');";
	mysqli_query($connection, $insertAdmin);

	$addPrimaryKey = "ALTER TABLE `users`
  ADD PRIMARY KEY (`login`);";
	mysqli_query($connection, $addPrimaryKey);

	mysqli_close($connection);
?>