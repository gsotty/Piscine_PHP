<?PHP

	session_start();

?>

<HTML>
<HEAD>
	<script langage="javascript">top.frames['chat'].location = 'chat.php';</script>
</HEAD>
<BODY>
	<form method="POST" action="speak.php" style="margin:0px">
		<input type="TEXT" value="" name="msg" size="100%">
		<input type="submit" value="OK" name="submit">
	</form>
</BODY>
</HTML>

<?PHP

	date_default_timezone_set('Europe/Paris');
	$time = time();
	if (file_exists("private") === FALSE)
		mkdir("private", 0755);
	if ($_SESSION['logged_on_user'])
	{
		$login = $_SESSION['logged_on_user'];
		$msg = $_POST['msg'];
		if ($login && $time && $msg)
		{
			if (file_exists("private/chat") === FALSE)
			{
				$tab = array();
				$tab[0] = array("login" => $login, "time" => $time, "msg" => $msg);
				$data = serialize($tab);
				file_put_contents("private/chat", $data);
			}
			else
			{
				$new_tab = array("login" => $login, "time" => $time, "msg" => $msg);
				$file = file_get_contents("private/chat", 1);
				$file_data = unserialize($file);
				$count = 0;
				foreach($file_data as $key => $elem)
				{
					$tmp[$count] = $elem;
					$count++;
				}
				$tmp[$count] = $new_tab;
				$data = serialize($tmp);
				file_put_contents("private/chat", $data);
			}
		}
	}

?>
