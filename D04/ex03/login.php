<?PHP
session_start();
include 'auth.php';
if (isset($_GET['login']) && $_GET['login'] != NULL && isset($_GET['passwd']) && $_GET['passwd'] != NULL)
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
	echo (auth($_SESSION['login'], $_SESSION['passwd']) == TRUE) ? "OK\n" : "ERROR\n";
}
else
{
	echo "ERROR\n";
	exit();
}
?>