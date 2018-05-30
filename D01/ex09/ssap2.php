#!/usr/bin/php
<?PHP
	function sspa2_sort($p1, $p2)
	{
		$p1_len = strlen($p1);
		$p2_len = strlen($p2);
		$p11 = strtolower($p1);
		$p22 = strtolower($p2);
		$car = "abcdefghijklmnopqrstuvwxyz0123456789!\"#$%&'()*+,-./:;<=>?@[\]^_`{|}~";

		for ($i = 0; $i < $p1_len && $i < $p2_len; ++$i)
			if (($value = strpos($car, $p11[$i]) - strpos($car, $p22[$i])))
				return ($value);
	}

	if ($argc < 2)
		return ;
	for ($i = 1; $i < $argc; ++$i)
		$str .= $argv[$i]. " ";
	$tab = preg_split('/ +/', trim($str));
	usort($tab, "sspa2_sort");
	foreach ($tab as $elem)
		echo $elem."\n";
?>
