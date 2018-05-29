#!/usr/bin/php
<?PHP
	if ($argc < 2)
		return ;
	$i = 0;
	while (++$i < $argc)
		$str .= " ".$argv[$i]." ";
	$str = trim($str);
	while (strpos($str, "  "))
		$str = str_replace("  ", " ", $str);
	$tab = explode(" ", $str);
	sort($tab);
	foreach ($tab as $word)
		echo "$word\n";
?>
