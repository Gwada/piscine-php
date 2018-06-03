<?PHP
	session_start(); 

	if (isset($_POST) AND isset($_POST['login']) AND isset($_POST['passwd'])
	AND isset($_POST['submit']) AND $_POST['submit'] == 'Terminer')
	{
		include ('auth.php');

		if (auth($_POST['login'], $_POST['passwd']))
		{
			$_SESSION['login'] = $_POST['login'];
			$_SESSION['loggued_on_user'] = $_SESSION['login'];	
		}
		else
		{
			$_SESSION['login'] = "";
			$_SESSION['loggued_on_user'] = NULL;
			$_SESSION['false_log'] = 'wrong';
    	}
	}
	$_SESSION['passwd'] = "";
	$path = 'http://localhost:8100/rush00/'.$_SESSION['page2'];
	header('Location: '.$path);
?>