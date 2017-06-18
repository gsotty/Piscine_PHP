<?PHP

date_default_timezone_set('Europe/Paris');
if (file_exists("private") === FALSE)
	mkdir("private", 0755);
if (file_exists("private/chat") === TRUE)
{
	file = file_get_contents("private/chat", 1);
	$file_data = unserialize($file);
	foreach($file_data as $elem)
	{
		$is_time = date('[H:i]', $elem['time']);
		echo ("$is_time <b>$elem[login]</b>: $elem[msg]<BR \/>\n");
	}
}

?>
