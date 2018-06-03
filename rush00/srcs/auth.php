<?PHP
	function auth($login, $passwd)
	{
		include("dbConnection.php");
		$connection = connectToDB();
		if (mysqli_connect_errno())		
			exit ;

		$queryAllUsers = "SELECT * FROM `users`;";
		$allUsers = mysqli_query($connection, $queryAllUsers);

		while ($row = mysqli_fetch_array($allUsers, MYSQLI_ASSOC))
			if ($row['login'] == $login AND $row['passwd'] == hash("whirlpool", $passwd))
			{
				if (($row['user_group'] == 'user' AND $_SESSION['page2'] != 'srcs/admin.php')
				|| ($row['user_group'] == 'admin' AND $_SESSION['page2'] == 'srcs/admin.php'))
				{
					mysqli_free_result($allUsers);
					mysqli_close($connection);
					return true;
				}
			}

		mysqli_free_result($allUsers);
		mysqli_close($connection);

		return false;
	}
?>