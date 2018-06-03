<meta charset="utf-8" />
<?php
	if ($_SESSION['page'] === 'index.php')
	{
		echo '<link rel="stylesheet" href="config.css"/>';
		echo '<link rel="icon" type="image/x-icon" href="./img/logo_onglet.ico">';
	}
	else
	{
		echo '<link rel="stylesheet" href="../config.css"/>';
		echo '<link rel="icon" type="image/x-icon" href="../img/logo_onglet.ico">';
	}
?>
<title>Flying Carpet</title>