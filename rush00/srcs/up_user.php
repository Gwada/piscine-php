<?php
	session_start();

	if (isset($_POST) AND isset($_POST['login']) AND $_POST['login'] != 'login'
	AND isset($_POST['passwd']) AND $_POST['passwd'] != 'passwd'
	AND isset($_POST['submit']) AND $_POST['submit'] === 'Terminer')
	{
		include("dbConnection.php");
		include ('auth.php');
		$connection = connectToDB();
		if (mysqli_connect_errno())
			exit ;
		$queryAllUsers = "SELECT * FROM users";
		$allUsers = mysqli_query($connection, $queryAllUsers);
		$exists = false;
		while ($row = mysqli_fetch_array($allUsers, MYSQLI_ASSOC))
			if ($row['login'] == $_POST['login'] AND auth($_POST['login'], $_POST['passwd']))
			{
				$_SESSION['false_log'] = 'exist';
				$_SESSION['loggued_on_user'] = NULL;
				$exists = true;
				break ;
			}
		if (!$exists)
		{
			if (!isset($_POST['user_group']) || $_POST['user_group'] != 'admin')
				$queryAddUser = "INSERT INTO `Users` (`login`, `passwd`)
				VALUES ('".$_POST['login']."', '".hash("whirlpool", $_POST['passwd'])."');";
			else
				$queryAddUser = "INSERT INTO `users` (`login`, `passwd`, `user_group`)
				VALUES ('".$_POST['login']."', '".hash("whirlpool", $_POST['passwd'])."', 'admin');";
			mysqli_query($connection, $queryAddUser);
			$_SESSION['loggued_on_user'] = $_POST['login'];
		}
		mysqli_free_result($allUsers);
		mysqli_close($connection);
	}
	if (isset($_POST['login']) AND $_POST['login'] == 'login'
	AND isset($_POST['passwd']) AND $_POST['passwd'] == 'passwd')
		$_SESSION['false_log'] = 'exist';
	$_SESSION['loggued_on_user'] = $_SESSION['login'];
		if ($_SESSION['page2'] == 'srcs/admin.php')
		header('Location: http://localhost:8100/rush00/srcs/admin.php');
	else
		header('Location: http://localhost:8100/rush00/index.php');
?>