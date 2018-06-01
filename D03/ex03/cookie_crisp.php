<?php
	if (isset($_GET["action"]) AND !empty($_GET["action"]) AND isset($_GET["name"]) AND !empty($_GET["name"]))
	{
		switch ($_GET["action"])
		{
			case "set":
				if (isset($_GET["value"]) AND !empty($_GET["value"]))
					setcookie($_GET["name"], $_GET["value"], time() + 365*24*3600, null, null, false, true);
				break ;
			case "get":
				if (isset($_COOKIE[$_GET["name"]]))
					echo $_COOKIE[$_GET["name"]] . "\n";
				break ;
			case "del":
				setcookie($_GET["name"], "", time() - 3600, null, null, false, true);
				break ;
			default:
				break ;
		}
	}
?>