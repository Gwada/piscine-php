<?PHP
	session_start();
	$_SESSION['loggued_on_user'] = "";
	$_SESSION['login'] = "";
	$_SESSION['false_log'] = "";
	$dir = $_SESSION['page'];
	header('Location: http://localhost:8100/rush00/index.php');
?>