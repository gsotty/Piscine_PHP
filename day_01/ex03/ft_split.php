#!/usr/bin/php
<?PHP

function ft_split($str)
{
	sort(($tab = array_filter(explode(" ", $str))));
	return ($tab);
}

?>
