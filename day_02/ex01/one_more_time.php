#!/usr/bin/php
<?PHP

	if ($argc > 1)
	{
		if (preg_match("/^(([Ll]undi)|([Mm]ardi)|([Mm]ercredi)|([Jj]eudi)|([Vv]endredi)|([Ss]amedi)|([Dd]imanche)) [0-9]{1,2} (([Jj]anvier)|([Ff][ée]vrier)|([Mm]ars)|([Aa]vril)|([Mm]ai)|([Jj]uin)|([Jj]uillet)|([Aa]o[ûu]t)|([Ss]eptembre)|([Oo]ctobre)|([Nn]ovembre)|([Dd][ée]cembre)) [0-9]{4} [0-9]{2}:[0-9]{2}:[0-9]{2}$/", $argv[1]) === 1)
		{
			$time = array_filter(explode(" ", $argv[1]));
			$month = array("/^[Jj]anvier$/", "/^[Ff][ée]vrier$/", "/^[Mm]ars$/", "/^[Aa]vril$/", "/^[Mm]ai$/", "/^[Jj]uin$/", "/^[Jj]uillet$/", "/^[Aa]o[ûu]t$/", "/^[Ss]eptembre$/", "/^[Oo]ctobre$/", "/^[Nn]ovembre$/", "/^[Dd][ée]cembre$/");
			date_default_timezone_set('Europe/Paris');
			$count_month = 1;
			foreach($month as $elem)
			{
				if ($elem && preg_match($elem, $time[2]))
					break ;
				else if ($elem)
					$count_month++;
			}
			$minute = array_filter(explode(":", $time[4]));
			$time_end = mktime($minute[0], $minute[1], $minute[2], $count_month, $time[1], $time[3]);
			echo $time_end."\n";
		}
		else
			echo "Wrong Format\n";
	}

?>
