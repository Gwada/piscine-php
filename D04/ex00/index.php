<?PHP
	session_start();
	if (isset($_GET['login']) AND !empty($_GET['login'])
	AND isset($_GET['passwd']) AND !empty($_GET['passwd'])
	AND $_GET['submit'] AND $_GET['submit'] === "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<html><body>
<form method="get" action="index.php">
	Identifiant: <input type="text" name="login" value="<?PHP
		echo empty($_SESSION['login']) ? "" : $_SESSION['login'];?>" />
	<br />
	Mot de passe : <input type="password" name="passwd" value="<?PHP
		echo empty($_SESSION['passwd']) ? "" : $_SESSION['passwd'];?>" />
	<input type="submit" name = "submit" value="OK" />
</form>
</body></html>