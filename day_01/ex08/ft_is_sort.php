#!/usr/bin/php
<?PHP

function ft_is_sort($tab)
{
	$tab_2 = $tab;
	sort($tab_2);
	return (empty(array_diff_assoc($tab, $tab_2)));
}

?>
