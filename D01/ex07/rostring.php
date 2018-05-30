#!/usr/bin/php
<?PHP
	if ($argc != 2)
		return ;
	$str = trim($argv[1]);
	while (strpos($str, "  "))
		$str = str_replace("  ", " ", $str);
	$tab = explode(" ", $str);
	if (($elems = count($tab)) > 1 && !($i = 0))
		while (++$i < $elems)
			echo $tab[$i]." ";
	echo $tab[0]."\n";
?>
