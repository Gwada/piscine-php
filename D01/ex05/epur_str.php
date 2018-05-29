#!/usr/bin/php
<?PHP
	if ($argc != 2)
		return ;
	$str = trim($argv[1]);
	while (strpos($str, "  "))
		$str = str_replace("  ", " ", $str);
	echo "$str\n";
?>
