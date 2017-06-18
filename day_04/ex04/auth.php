<?PHP

	function auth($login, $passwd)
	{
		if ($login && $passwd)
		{
			if (file_exists("private/passwd") === TRUE)
			{
				$file = file_get_contents("private/passwd", 1);
				$file_data = unserialize($file);
				foreach($file_data as $elem)
				{
					foreach($elem as $key => $elem_1)
					{
						if ($key === "login" && $elem_1 === $login)
						{
							if ($elem['passwd'] === hash("whirlpool", $passwd))
								return (TRUE);
						}
					}
				}
				return (FALSE);
			}
			else
				return (FALSE);
		}
		else
			return (FALSE);
	}

?>
