#!/usr/bin/php
<?PHP

	if ($argv > 1)
	{
		if (preg_match("/.*?.csv$/", $argv[1]) == 1)
		{
			if (($data = file_get_contents($argv[1], 1)) === FALSE)
				return (0);
			$line = array_filter(explode("\n", $data));
			$count = 0;
			$data_tab = array();
			$key_tab = array_filter(explode(";", $line[0]));
			print_r($key_tab);
			foreach($line as $elem)
			{
				if ($elem)
				{
					$data_tab[$count] = array_combine($key_tab, array_filter(explode(";", $elem)));
					$count++;
				}
			}
			print_r($data_tab);
			$fd = fopen("php://stdin", "r");
			while ($fd && !feof($fd))
			{
				echo "Entrez votre commande: ";
				$buf = fgets($fd);
				$cmd = array_filter(explode(" ", $buf));
				if ($cmd[0] === "echo")
				{
					
				}
				else if ($cmd[0] === "print_r")
				{
					
				}
				else
					echo "PHP Parse error : syntax error, unexpected T_STRING in [....]\n";
			}
			fclose($fd);
			echo "\n";
		}
		else
			return (0);
	}

?>
