#!/usr/bin/php
<?PHP

	$x = 0;

	$tab = array_filter(explode(" ", $argv[1]));
	foreach($tab as $elem)
	{
		if ($elem && $count == 0)
		{
			echo "$elem";
			$count++;
		}
		else if ($elem && $count == 1)
			echo " $elem";
	}
	echo "\n";
?>
