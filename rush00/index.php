<?php
	session_start();
	$_SESSION['page'] = 'index.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<?php include('srcs/head.php'); ?>
	</head>

	<body>
		<contener>
			<?php include('srcs/header.php'); ?>
			<div>
				<?php include('srcs/nav.php'); ?>
				<?php include('srcs/section.php'); ?>
			</div>
			<?php include('srcs/footer.php'); ?>
		</contener>
	</body>
</html>