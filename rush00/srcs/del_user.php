<?php
	session_start();

	if (isset($_POST) AND $_POST['login'] != 'login' AND $_POST['login'] != 'admin' AND isset($_POST['submit']) AND $_POST['submit'] === 'Terminer')
	{
		include("dbConnection.php");
		include ('auth.php');
		$connection = connectToDB();
		if (mysqli_connect_errno())
			exit ;

		$queryDelUser = "DELETE FROM users WHERE login ='".$_POST['login']."'";
		if (mysqli_query($connection, $queryDelUser))
			$_SESSION['user_msg'] = "Deleted successfully";
		else
			$_SESSION['user_msg'] = "Error";

		mysqli_close($connection);
	}
	else
	{
		$_SESSION['user_msg'] = "Error";
	}

	if ($_SESSION['page2'] == 'srcs/admin.php')
		header('Location: http://localhost:8100/rush00/srcs/admin.php');
	else
		header('Location: http://localhost:8100/rush00/index.php');
?>