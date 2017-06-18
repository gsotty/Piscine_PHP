<?PHP

	include("auth.php");

	session_start();

	if (auth($_POST['login'], $_POST['passwd']) === TRUE)
	{
		$_SESSION['logged_on_user'] = $_POST['login'];
	}
	else
	{
		$_SESSION['logged_on_user'] = "";
		echo "ERROR\n";
	}

?>

<HTML>
<BODY><BR />
<a href="logout.php">déconnexion</a><BR />
<iframe src="chat.php" name="chat" scrolling="auto"  height="550px" width="100%"></iframe><BR />
<iframe src="speak.php" name="speak" height="50px" width="100%"></iframe>
</BODY>
</HTML>
