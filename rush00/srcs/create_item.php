<?php

	session_start(); 

	if (isset($_POST) AND isset($_POST['reference']) AND isset($_POST['name']) AND isset($_POST['couleur']) AND isset($_POST['prix']) AND isset($_POST['quantite']) AND isset($_POST['categorie']))
	{
		include("dbConnection.php");
		include ("auth.php");
		$connection = connectToDB();
		if (mysqli_connect_errno())
			exit ;

		$queryAllItems = "SELECT * FROM items";
		$allItems = mysqli_query($connection, $queryAllItems);
		$exists = false;
		while ($row = mysqli_fetch_array($allItems, MYSQLI_ASSOC))
		{
			if ($row['reference'] == $_POST['reference'])
			{
				$exists = true;
				break ;
			}
		}
		if(!$exists)
		{
			$queryAddItems = "INSERT INTO items (reference, name, couleur, prix, quantite, categorie) VALUES ('".$_POST['reference']."', '".$_POST['name']."', '".$_POST['couleur']."', '".$_POST['prix']."', '".$_POST['quantite']."', '".$_POST['categorie']."')";
			mysqli_query($connection, $queryAddItems);
		}
		mysqli_free_result($allItems);
		mysqli_close($connection);
	}
	if ($_SESSION['page2'] == 'srcs/admin.php')
		header('Location: http://localhost:8100/rush00/srcs/admin.php');
	else
		header('Location: http://localhost:8100/rush00/index.php');
?>