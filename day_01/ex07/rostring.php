#!/usr/bin/php
<?PHP

	$count = 0;

	if ($argc > 1)
	{
		$tab = array_filter(explode(" ", $argv[1]));
		$tmp = $tab[0];
		unset($tab[0]);
		array_filter($tab);
		foreach($tab as $elem)
			$count++;
		$tab[$count + 1] = $tmp;
		$count = 0;
		foreach($tab as $elem)
		{
			if ($elem && $count == 0)
			{
				echo "$elem";
				$count++;
			}
			else
			{
				echo " $elem";
			}
		}
		echo "\n";
	}

?>
