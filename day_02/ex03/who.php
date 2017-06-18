#!/usr/bin/php
<?PHP

	$binarydata = file_get_contents("/var/run/utmpx", 1);
	$tab = [];
	while ($binarydata != "")
	{
		date_default_timezone_set("Europe/Paris");
		$array = unpack("A256user/A4id/A32ttyname/ipid/itype/lloginsec/lloginus/A256host/A64pad", $binarydata);
		if ($array['type'] == 7)
			$tab[] = $array['user']."   ".$array['ttyname']."  ".strftime("%b %e %R", $array['loginsec']).PHP_EOL;
		$binarydata = substr($binarydata, 628);
	}
	sort ($tab);
	foreach ($tab as $s)
		echo $s;

?>
