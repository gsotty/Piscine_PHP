<?PHP

	abstract class Fighter
	{
		public $name_of_jean;

		abstract function fight($target);

		function __construct($name)
		{
			$this->name_of_jean = $name;
		}
	}

?>
