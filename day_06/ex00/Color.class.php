<?PHP

Class Color
{
	public $red = 0;
	public $green = 0;
	public $blue = 0;
	public $rgb = 0;
	public static $verbose = FALSE;

	function __construct(array $kwargs)
	{
		if (array_key_exists('rgb', $kwargs))
		{
			$this->rgb = intval($kwargs['rgb']);
			$this->red = $this->rgb >> 16;
			$this->green = ($this->rgb & 65280) >> 8;
			$this->blue = ($this->rgb & 255);
		}
		else if (array_key_exists('red', $kwargs) && array_key_exists('green', $kwargs) && array_key_exists('blue', $kwargs))
		{
			$this->red = intval($kwargs['red']);
			$this->green = intval($kwargs['green']);
			$this->blue = intval($kwargs['blue']);
			$this->rgb = (($this->red << 16) | ($this->green << 8) | $this->blue);
		}
		if (self::$verbose === TRUE)
		{
			printf("Color( red: %3d, green: %3d, blue: %3d ) constructed.".PHP_EOL, $this->red, $this->green, $this->blue);
		}
	}

	function __destruct()
	{
		if (self::$verbose === TRUE)
		{
			printf("Color( red: %3d, green: %3d, blue: %3d ) destructed.".PHP_EOL, $this->red, $this->green, $this->blue);
		}
	}

	function __toString()
	{
		return (sprintf("Color( red: %3d, green: %3d, blue: %3d )", $this->red, $this->green, $this->blue));
	}

	function add (Color $color_parm_1)
	{
		return (new Color(array('red' => ($this->red + $color_parm_1->red), 'green' => ($this->green + $color_parm_1->green), 'blue' => ($this->blue + $color_parm_1->blue))));
	}

	function sub(Color $color_parm_2)
	{
		return (new Color(array('red' => ($this->red - $color_parm_2->red), 'green' => ($this->green - $color_parm_2->green), 'blue' => ($this->blue - $color_parm_2->blue))));
	}

	function mult($facteur)
	{
		return (new Color(array('red' => ($this->red * $facteur), 'green' => ($this->green * $facteur), 'blue' => ($this->blue * $facteur))));
	}

	public static function doc()
	{
		return file_get_contents("Color.doc.txt", 1);
	}
}

?>
