#!/usr/bin/php
<?PHP

if ($argc === 2)
{
	echo $argv[1];
	$tab_plus = array_filter(explode('+', $argv[1]));
	print_r($tab_plus);
	$tab_moins = array_filter(explode('-', $argv[1]));
	print_r($tab_moins);
	$tab_fois = array_filter(explode('*', $argv[1]));
	print_r($tab_fois);
	$tab_div = array_filter(explode('/', $argv[1]));
	print_r($tab_div);
	$tab_modul = array_filter(explode('%', $argv[1]));
	print_r($tab_modul);
	if (strlen($tab_plus) == 3 && (strlen($tab_moins) == 1 || strlen($tab_fois) == 1 || strlen($tab_div) == 1 || strlen($tab_modul) == 1))
	{
		
	}
	else if (strlen($tab_moins) == 3 && (strlen($tab_plus) == 1 || strlen($tab_fois) == 1 || strlen($tab_div) == 1 || strlen($tab_modul) == 1))
	{
		
	}
	else if (strlen($tab_fois) == 3 && (strlen($tab_plus) == 1 || strlen($tab_moins) == 1 || strlen($tab_div) == 1 || strlen($tab_modul) == 1))
	{
		
	}
	else if (strlen($tab_div) == 3 && (strlen($tab_plus) == 1 || strlen($tab_moins) == 1 || strlen($tab_fois) == 1 || strlen($tab_modul) == 1))
	{
		
	}
	else if (strlen($tab_modul) == 3 && (strlen($tab_plus) == 1 || strlen($tab_fois) == 1 || strlen($tab_fois) == 1 || strlen($tab_fois) == 1))
	{
		
	}
	else
		echo "syntax error\n";
	return (0);
}
else
{
	echo "too many arguments\n";
}

?>
