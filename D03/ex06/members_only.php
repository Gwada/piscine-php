<?php
	if (isset($_SERVER['PHP_AUTH_USER']) AND $_SERVER['PHP_AUTH_USER'] === 'zaz'
	AND isset($_SERVER['PHP_AUTH_PW']) AND $_SERVER['PHP_AUTH_PW'] === 'jaimelespetitsponeys')
	{
			echo '<html><body>' . "\n" . 'bonjour Zaz<br />' . "\n" . '<img src=';
			echo base64_encode(file_get_contents("../../img/42.png")) . "\n" . '</body></html>' . "\n";
	}
	else
	{
		header('WWW-Authenticate: Basic realm="My Realm"');
		header('HTTP/1.0 401 Unauthorized');
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
		exit ;
	}
?>