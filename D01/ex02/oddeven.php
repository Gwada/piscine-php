#!/usr/bin/php
<?PHP
	echo "Entrez un nombre: ";
	$n = trim(fgets(STDIN));
	if (is_numeric($n))
	{
		if (!($n[strlen($n) - 1] % 2))
			echo "Le chiffre $n est Pair";
		else
			echo "Le chiffre $n est Impair";
	}
	else if (!feof(STDIN))
		echo "'$n' n'est pas un chiffre";
	echo "\n";
?>
