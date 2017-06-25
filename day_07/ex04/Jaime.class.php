<?PHP

	class Jaime extends Lannister
	{
		function sleepWith($name)
		{
			if ($name->is_lannister === TRUE)
			{
				if ($name->is_tyrion === TRUE)
				{
					print("Not even if I'm drunk !".PHP_EOL);
				}
				else
				{
					print("With pleasure, but only in a tower inWinterfell, then.".PHP_EOL);
				}
			}
			else
			{
				print("Let's do this.".PHP_EOL);
			}
		}
	}

?>
