<?PHP

	foreach($_GET as $key => $elem)
	{
		if ($elem !== "" && $key !== "")
		{
			echo ("$key: $elem\n");
		}
	}

?>
