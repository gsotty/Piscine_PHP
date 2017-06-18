#!/usr/bin/php
<?PHP

function ft_callback($buf)
{
	$buf[3] = strtoupper($buf[3]);
	$buf[1] = $buf[2].$buf[3].$buf[4];
	return ($buf[1]);
}

	if ($argc > 1)
	{
		$buf = file_get_contents($argv[1]);
		$tab = preg_replace_callback("/(?<name>(title\=[\"\'])(.*?)([\"\']))/s", "ft_callback", $buf);
		$tab = preg_replace_callback("/((<a.*?>)(.*?)(<.*?\/a>))/s", "ft_callback", $tab);
		echo ($tab);
	}

?>
