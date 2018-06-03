<?PHP
	echo "ewfgrw";
	session_start();
	?>

	<html>
	<body>
		salut vous
	</body>
	</html><?php
 	if (isset($_POST) AND isset($_POST['reference']) AND isset($_POST['name']) AND isset($_POST['couleur'])
	AND isset($_POST['prix']) AND isset($_POST['quantite']) AND isset($_POST['categorie']))
	{
		include("dbConnection.php");
		include ('auth.php');

		$connection = connectToDB();
		if (mysqli_connect_errno())
		{
			echo "HEEE<br />";
			exit ;
		}
		$queryAllItems = "SELECT * FROM items";
		//echo $queryAllItems."<br />";
		echo "ALLO<br />";
		$allItems = mysqli_query($connection, $queryAllItems);
		$exists = false;
		while ($row = mysqli_fetch_array($allItems, MYSQLI_ASSOC))
		{
			if ($row['reference'] == $_POST['reference'])
			{
				break ;
				//increment
			}
		}
	                                                                                                                 
	$queryAddItems = "INSERT INTO `items` (`reference`, `name`, `couleur`, `prix`, `quantite`, `categorie`) VALUES ('".$_POST['reference']."', '".$_POST['name']). "', '".$_POST['couleur']."', '".$_POST['prix'])."', '".$_POST['quantite'])."', '".$_POST['categorie'])."')";

		echo $queryAddItems."<br />";
		mysqli_query($connection, $queryAddItems);
		$_SESSION['loggued_on_user'] = $_POST['login'];
		mysqli_free_result($allItems);
		mysqli_close($connection);

	}
	echo "test";

//	header('Location: http://localhost:8100/rush00/srcs/admin.php');
?>