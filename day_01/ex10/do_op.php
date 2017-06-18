#!/usr/bin/php
<?PHP

if ($argc === 4)
{
	$n1 = trim($argv[1], " \t");
	$n2 = trim($argv[3], " \t");
	$s = trim($argv[2], " \t");
	if (strcmp($s, "+") == 0)
	{
		$result = $n1 + $n2;
		echo $result."\n";
	}
	else if (strcmp($s, "-") == 0)
	{
		$result = $n1 - $n2;
		echo $result."\n";
	}
	else if (strcmp($s, "*") == 0)
	{
		$result = $n1 * $n2;
		echo $result."\n";
	}
	else if (strcmp($s, "/") == 0)
	{
		$result = $n1 / $n2;
		echo $result."\n";
	}
	else if (strcmp($s, "%") == 0)
	{
		$result = $n1 % $n2;
		echo $result."\n";
	}
	return (0);
}
else
{
	echo "too many arguments\n";
}

?>
