<?PHP
	function ft_split($str)
	{
		$str = explode(" ", $str);
		$tab = array_filter($str, 'strlen');
		sort($tab);
		return ($tab);
	}
?>
