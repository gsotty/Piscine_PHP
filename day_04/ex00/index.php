<?php

	session_start();

	if ($_GET['login'] !== NULL)
		$_SESSION['login'] = $_GET['login'];
	if ($_GET['passwd'] !== NULL)
		$_SESSION['passwd'] = $_GET['passwd'];
	$login = $_SESSION['login'];
	$passwd = $_SESSION['passwd'];
	if ($login || $passwd)
		echo("<HTML><BODY>
	<form method=\"get\" action=\"index.php\">
		Identifiant: <input type=\"text\" name=\"login\" value=\"$login\" size=\"12\"><br />
		Mot de passe: <input type=\"text\" name=\"passwd\" value=\"$passwd\"size=\"12\"><br />
		<input type=\"submit\" value=\"OK\" name=\"submit\">
		</form>
	</BODY></HTML>\n"); 
	else
		echo("<HTML><BODY>
	<form method=\"get\" action=\"index.php\">
		Identifiant: <input type=\"text\" name=\"login\" value=\"\" size=\"12\"><br />
		Mot de passe: <input type=\"text\" name=\"passwd\" value=\"\" size=\"12\"><br />
		<input type=\"submit\" value=\"OK\" name=\"submit\">
		</form>
	</BODY></HTML>\n"); 
?>
