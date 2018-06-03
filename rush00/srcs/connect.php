<?php
	session_start();
	$_SESSION['page2'] = $_SESSION['page'];
	$_SESSION['page'] = 'srcs/connect.php';
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
