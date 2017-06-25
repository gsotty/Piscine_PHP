<?PHP
error_reporting(E_ALL);
ini_set('display_errors', 1);
date_default_timezone_set('Europe/Paris');

	class UnholyFactory
	{
		public $tab_absorb = array();
		private $count_absorb = 0;
		private $tab_class = array();
		private $verif = 1;
		private $verif_2 = 1;
		private $verif_3 = 1;
		public $class;

		function absorb($name_absorb)
		{
			$this->tab_class = class_parents($name_absorb);
			$this->verif_2 = 1;

			foreach ($this->tab_class as $class)
			{
				if ($class === "Fighter")
				{
					$this->verif = 1;
					$this->verif_2 = 0;
					foreach($this->tab_absorb as $elem)
					{
						if ($elem === $name_absorb->name_of_jean)
						{
							print("(Factory already absorbed a fighter of type "
								.$name_absorb->name_of_jean.")".PHP_EOL);
							$this->verif = 0;
						}
					}
					if ($this->verif === 1)
					{
						print("(Factory absorbed a fighter of type "
							.$name_absorb->name_of_jean.")".PHP_EOL);
						$this->tab_absorb[$this->count_absorb] =
							$name_absorb->name_of_jean;
						$this->count_absorb++;
					}
				}
			}
			if ($this->verif_2 === 1)
			{
				print("(Factory can't absorb this, it's not a fighter)".PHP_EOL);
			}
		}

		function fabricate($name_fabricate)
		{
			$this->verif_3 = 1;
			foreach($this->tab_absorb as $elem)
			{
				if ($elem === $name_fabricate)
				{
					$this->verif_3 = 0;
					print("(Factory fabricates a fighter of type "
						.$name_fabricate.")".PHP_EOL);
					if ($elem === "foot soldier")
					{
						return (new Footsoldier());
					}
					else if ($elem === "archer")
					{
						return (new Archer());
					}
					else if ($elem === "assassin")
					{
						return (new Assassin());
					}
				}
			}
			if ($this->verif_3 === 1)
				print("(Factory hasn't absorbed any fighter of type "
				.$name_fabricate.")".PHP_EOL);
		}
	}

?>
