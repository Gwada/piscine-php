<?php
	session_start(); 

	if (isset($_POST) AND isset($_POST['reference']) AND isset($_POST['quantite']))
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
				if($_POST['quantite'] >= $row['quantite'])
					$queryDelItem = "DELETE FROM items WHERE reference ='".$_POST['reference']."'";
				else
				{
					$row['quantite'] -= $_POST['quantite'];
					$queryDelItem = "UPDATE items SET quantite ='".$row['quantite']."' WHERE reference='".$row['reference']."'";
				}
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