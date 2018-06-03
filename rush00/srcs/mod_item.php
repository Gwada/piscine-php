<?php
	session_start();
	if (isset($_POST) AND isset($_POST['reference']))
	{
		include("dbConnection.php");
		include ("auth.php");
		$connection = connectToDB();
		if (mysqli_connect_errno())
			exit ;

		$queryAllItems = "SELECT * FROM items";
		$allItems = mysqli_query($connection, $queryAllItems);
		while ($row = mysqli_fetch_array($allItems, MYSQLI_ASSOC))
			if ($row['reference'] == $_POST['reference'])
			{
				if (!empty($_POST['name']))			$row['name'] = $_POST['name'];
				if (!empty($_POST['couleur'])) 		$row['couleur'] = $_POST['couleur'];
				if (!empty($_POST['prix'])) 		$row['prix'] = $_POST['prix'];
				if (!empty($_POST['quantite'])) 	$row['quantite'] = $_POST['quantite'];
				if (!empty($_POST['categorie']))	$row['categorie'] = $_POST['categorie'];

				$queryDelItem = "UPDATE items SET name='".$row['name']."', couleur='".$row['couleur']."', prix='".$row['prix']."', quantite='".$row['quantite']."', categorie='".$row['categorie']."' WHERE reference='".$row['reference']."'";
				mysqli_query($connection, $queryDelItem);
				break ;
			}
		mysqli_free_result($item);
		mysqli_close($connection);
	}

	if ($_SESSION['page2'] == 'srcs/admin.php')
		header('Location: http://localhost:8100/rush00/srcs/admin.php');
	else
		header('Location: http://localhost:8100/rush00/index.php');

?>