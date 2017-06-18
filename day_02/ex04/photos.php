#!/usr/bin/php
<?PHP

	if ($argc > 1)
	{
		preg_match_all("/(https{0,1}:\/\/(.*?))\//", $argv[1], $dir);
		mkdir("{$dir[2][0]}", 0755, true);
		$buf = file_get_contents($argv[1]);
		$tab_buf = array($buf);
		preg_match_all("/<[Ii][Mm][Gg].*?[Ss][Rr][Cc]=[\"\'](.*?)[\"\'].*?>/s", $buf, $tab);
		foreach($tab[1] as $elem)
		{
			$filename = basename($elem);
			$save_location = $dir[2][0] ."/". $filename;
			$fp = fopen($save_location, 'w');
			if (($ch = curl_init($elem)) === FALSE)
				return (0);
			curl_setopt($ch, CURLOPT_FILE, $fp);
			curl_setopt($ch, CURLOPT_HEADER, FALSE);
			if (curl_exec($ch) === FALSE)
			{
				if (($ch = curl_init($dir[1][0].$elem)) === FALSE)
					return (0);
				curl_setopt($ch, CURLOPT_FILE, $fp);
				curl_setopt($ch, CURLOPT_HEADER, FALSE);
				if (curl_exec($ch) === FALSE)
					return (0);
			}
			curl_close($ch);
		}
		fclose($fd);
	}

?>
