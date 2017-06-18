#!/usr/bin/php
<?PHP

	if ($argc > 1)
	{
		$count = 0;
		$tab = preg_split("/[\t ]/", $argv[1]);
		foreach($tab as $elem)
		{
			if ($elem && $count === 0)
			{
				echo "$elem";
				$count++;
			}
			else if ($elem)
			{
				echo " $elem";
				$count++;
			}
		}
		echo "\n";
	}

?>
