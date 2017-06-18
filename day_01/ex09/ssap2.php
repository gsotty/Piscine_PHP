#!/usr/bin/php
<?PHP

function ft_is_alpha($char)
{
	if (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z'))
		return (true);
	return (false);
}

function my_sort($c1, $c2)
{
	if (ft_is_alpha($c1) !== FALSE)
	{
		if (ft_is_alpha($c2) === FALSE)
			return (-1);
		if (strcasecmp($c1, $c2) == 0)
			return (0);
		return (strcasecmp($c1, $c2) > 0 ? 1 : -1);
	}
	else if (is_numeric($c1))
	{
		if (ft_is_alpha($c2) !== FALSE)
			return (1);
		else if (ft_is_alpha($c2) === FALSE && !is_numeric($c2))
			return (-1);
		if (strcasecmp($c1, $c2) == 0)
			return (0);
		return (strcasecmp($c1, $c2) > 0 ? 1 : -1);
	}
	else
	{
		if (ft_is_alpha($c2) !== FALSE || is_numeric($c2))
			return (1);
		if (strcasecmp($c1, $c2) == 0)
			return (0);
		return (strcasecmp($c1, $c2) > 0 ? 1 : -1);
	}
}

function ft_sort($s1, $s2)
{
	$len = strlen($s1) + 1;
	$i = 0;

	while ($i < $len)
	{
		if (my_sort($s1[$i], $s2[$i]) != 0)
			return (my_sort($s1[$i], $s2[$i]));
		$i++;
	}
	return (0);
}

	$count = 0;
	$tab = array();

	foreach($argv as $elem)
	{
		if ($elem && $count !== 0)
		{
			$tab = array_merge($tab, array_filter(explode(" ", $elem)));
		}
		$count++;
	}
	usort($tab, "ft_sort");
	foreach($tab as $elem)
	{
		echo "$elem\n";
	}
?>
