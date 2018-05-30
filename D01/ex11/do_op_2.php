#!/usr/bin/php
<?PHP
	if ($argc != 2)
		echo "Incorrect Parameters\n";
	else
	{
		$sign = 0;
		if (strpos($argv[1], "+") && ($sign = 1))
			$tab = explode("+", $argv[1]);
		else if (strpos($argv[1], "-") && ($sign = 2))
			$tab = explode("-", $argv[1]);
		else if (strpos($argv[1], "*") && ($sign = 3))
			$tab = explode("*", $argv[1]);
		else if (strpos($argv[1], "/") && ($sign = 4))
			$tab = explode("/", $argv[1]);
		else if (strpos($argv[1], "%") && ($sign = 5))
			$tab = explode("%", $argv[1]);
		if (count($tab) != 2 || !ctype_digit(($s1 = trim($tab[0])))
			|| !ctype_digit(($s2 = trim($tab[1]))))
		{
			echo "Syntax Error\n";
			exit ;
		}
		$sign == 1 ? print($s1 + $s2."\n") : 0;
		$sign == 2 ? print($s1 - $s2."\n") : 0;
		$sign == 3 ? print($s1 * $s2."\n") : 0;
		$sign == 4 ? print($s1 / $s2."\n") : 0;
		$sign == 5 ? print($s1 % $s2."\n") : 0;
	}
?>
