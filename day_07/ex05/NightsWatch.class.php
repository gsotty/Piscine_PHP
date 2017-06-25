<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Paris');

	class NightsWatch
	{
		private $tab_recruit = array();
		private static $count_recruit = 0;

		function recruit ($name)
		{
			if (method_exists(get_class($name), "fight"))
			{
				$this->tab_recruit[self::$count_recruit] = $name;
				self::$count_recruit++;
			}
		}

		function fight()
		{
			foreach($this->tab_recruit as $elem)
			{
				$elem->fight();
			}
		}
	}

?>
