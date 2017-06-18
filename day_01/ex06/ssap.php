#!/usr/bin/php
<?PHP

	$count = 0;
	$tab = array();

	foreach($argv as $elem)
	{
		if ($elem && $count != 0)
		{
			$tab = array_merge($tab, array_filter(explode(" ", $elem)));
		}
		$count++;
	}
	sort($tab);
	foreach($tab as $elem)
	{
		echo "$elem\n";
	}
?>
