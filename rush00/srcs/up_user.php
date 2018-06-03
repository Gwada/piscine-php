<?php
	session_start();

	if (isset($_POST) AND isset($_POST['login']) AND $_POST['login'] != 'login' AND $_POST['login'] != 'admin'
	AND isset($_POST['newlogin']) AND $_POST['newlogin'] != 'login' AND $_POST['newlogin'] != 'admin'
	AND isset($_POST['newpasswd']) AND $_POST['newpasswd'] != 'passwd'
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
			if ($row['login'] == $_POST['login'])
			{
				$queryModUser = "UPDATE users SET login = '".$_POST['newlogin']."', passwd = '".hash("whirlpool", $_POST['newpasswd'])."' WHERE login ='".$_POST['login']."'";
				if (mysqli_query($connection, $queryModUser))
				{
					$_SESSION['user_msg'] = 'Successfully modified';
				}
				else
				{
					$_SESSION['user_msg'] = 'Error';
				}
				$exists = true;
				break ;
			}
		if (!$exists)
		{
			$_SESSION['user_msg'] = 'This users does not exist';
		}
		mysqli_free_result($allUsers);
		mysqli_close($connection);
	}
	if ($_SESSION['page2'] == 'srcs/admin.php')
		header('Location: http://localhost:8100/rush00/srcs/admin.php');
	else
		header('Location: http://localhost:8100/rush00/index.php');
?>