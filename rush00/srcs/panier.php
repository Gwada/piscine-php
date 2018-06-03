<?php
	session_start();
	$_SESSION['page'] = 'srcs/panier.php';
	if (isset($_GET['login']) AND !empty($_GET['login'])
	AND isset($_GET['passwd']) AND !empty($_GET['passwd'])
	AND $_GET['submit'] AND $_GET['submit'] === "OK")
	{
		$_SESSION['login'] = $_GET['login'];
		$_SESSION['passwd'] = $_GET['passwd'];
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('head.php'); ?>
	</head>

	<body>
		<contener>
			<?php include('header.php'); ?>
			<div>
				<?php include('nav.php'); ?>
				<?php include('section.php'); ?>
			</div>
			<?php include('footer.php'); ?>
		</contener>
	</body>
</html>