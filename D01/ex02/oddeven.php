#!/usr/bin/php
<?PHP
	echo "Entrez un nombre: ";
	$n = trim(fgets(STDIN));
	if (is_numeric($n))
		echo !($n % 2) ? "Le chiffre $n est Pair" : "Le chiffre $n est Impair";
	else if (!feof(STDIN))
		echo "'$n' n'est pas un chiffre";
	echo "\n";
?>
