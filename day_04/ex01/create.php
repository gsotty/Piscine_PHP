<?PHP

	$login = $_POST['login'];
	$passwd =  $_POST['passwd'];
	$submit =  $_POST['submit'];
	if (file_exists("private") === FALSE)
		mkdir("private", 0755);
	if ($login && $passwd && $submit === "OK")
	{
		if (file_exists("private/passwd") === FALSE)
		{
			$tab = array();
			$tab[0] = array("login" => $login, "passwd" => hash("whirlpool", $passwd));
			$data = serialize($tab);
			file_put_contents("private/passwd", $data);
			echo "OK\n";
		}
		else
		{
			$new_tab = array("login" => $login, "passwd" => hash("whirlpool", $passwd));
			$file = file_get_contents("private/passwd", 1);
			$file_data = unserialize($file);
			foreach($file_data as $elem)
			{
				foreach($elem as $key => $elem_1)
				{
					if ($key === "login" && $elem_1 === $login)
					{
						echo "ERROR\n";
						return (0);
					}
				}
			}
			$count = 0;;
			foreach($file_data as $key => $elem)
			{
				$tmp[$count] = $elem;
				$count++;
			}
			$tmp[$count] = $new_tab;
			$data = serialize($tmp);
			file_put_contents("private/passwd", $data);
			echo "OK\n";
		}
	}
	else
		echo "ERROR\n";

?>
