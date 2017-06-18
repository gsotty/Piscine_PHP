#!/usr/bin/php
<?PHP

function ft_pair($nbr)
{
	if ($nbr % 2 == 0)
		echo "Le chiffre $nbr est Pair\n";
	else
		echo "Le chiffre $nbr est Inpair\n";
}

$fd = fopen("php://stdin", "r");
while ($fd && !feof($fd))
{
	echo "Entrez un nombre: ";
	$buf = fgets($fd);
	$buf = str_replace("\n", "", $buf);
	if ($buf)
	{
		if (is_numeric($buf))
		{
			ft_pair($buf);
		}
		else
		{
			echo "$buf n'est pas un chiffre\n";
		}
	}
}
fclose($fd);
echo "\n";

?>
