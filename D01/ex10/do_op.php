#!/usr/bin/php
<?PHP
	if ($argc != 4)
		echo "Incorrect Parameters\n";
	else
	{
		trim($argv[2]) == '+' ? print(trim($argv[1]) + trim($argv[3])."\n") : 0;
		trim($argv[2]) == '-' ? print(trim($argv[1]) - trim($argv[3])."\n") : 0;
		trim($argv[2]) == '*' ? print(trim($argv[1]) * trim($argv[3])."\n") : 0;
		trim($argv[2]) == '/' ? print(trim($argv[1]) / trim($argv[3])."\n") : 0;
		trim($argv[2]) == '%' ? print(trim($argv[1]) % trim($argv[3])."\n") : 0;
	}
?>
