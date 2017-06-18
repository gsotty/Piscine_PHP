<?PHP

	$login = $_POST['login'];
	$oldpw =  $_POST['oldpw'];
	$newpw =  $_POST['newpw'];
	$submit =  $_POST['submit'];
	if ($login && $oldpw && $newpw && $submit === "OK")
	{
		if (file_exists("private/passwd") === TRUE)
		{
			$new_tab = array("login" => $login, "passwd" => hash("whirlpool", $newpw));
			$file = file_get_contents("private/passwd", 1);
			$file_data = unserialize($file);
			$verif = 0;
			$count = 0;
			foreach($file_data as $elem)
			{
				foreach($elem as $key => $elem_1)
				{
					if ($key === "login" && $elem_1 === $login)
					{
						if ($elem['passwd'] === hash("whirlpool", $oldpw))
						{
							$verif = 1;
							$file_data[$count] = $new_tab;
						}
						else
						{
							echo "ERROR\n";
							return (0);
						}
					}
				}
				$count++;
			}
			if ($verif === 0)
			{
				echo "ERROR\n";
				return (0);
			}
			else
			{
				$data = serialize($file_data);
				file_put_contents("private/passwd", $data);
				echo "OK\n";
			}
		}
		else
		{
			echo "ERROR\n";
		}
	}
	else
		echo "ERROR\n";

?>
