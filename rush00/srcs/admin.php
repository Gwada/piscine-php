<?php
	session_start();
	$_SESSION['page'] = 'srcs/admin.php';
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
				<?php isset($_SESSION['login']) AND $_SESSION['login'] != 'admin' ? include('nav.php') : 0; ?>
				<?php include('section.php'); ?>
			</div>
			<?php $_SESSION['loggued_on_user'] != 'admin' ? include('footer.php') : 0; ?>
		</contener>
	</body>
</html>