<?PHP
	function ft_is_sort($tab)
	{
		$tab2 = $tab;
		$elems = count($tab2);
		$sort = 1;
		$rsort = 1;
		sort($tab2);
		for ($i = 0; $i < $elems; ++$i)
			if ($tab2[$i] != $tab[$i])
				$sort = 0;
		rsort($tab2);
		for ($i = 0; $i < $elems; ++$i)
			if ($tab2[$i] != $tab[$i])
				$rsort = 0;
		return (($sort || $rsort) ? TRUE : FALSE);
	}
?>
