<?PHP

	class Tyrion extends Lannister
	{
		public $is_tyrion = TRUE;

		function sleepWith($name)
		{
			if ($name->is_lannister === TRUE)
			{
				print("Not even if I'm drunk !".PHP_EOL);
			}
			else
			{
				print("Let's do this.".PHP_EOL);
			}
		}
	}

?>
