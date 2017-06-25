<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Paris');

	class House
	{
		function introduce()
		{
			print("House ".static::getHouseName()." of ".static::getHouseSeat()." : \"".static::getHouseMotto()."\"".PHP_EOL);
		}
	}

?>
