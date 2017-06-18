<?PHP

	if ($_SERVER['PHP_AUTH_USER'] === "zaz" && $_SERVER['PHP_AUTH_PW'] === "jaimelespetitsponeys")
	{
		echo "bonjour";
		$img = base64_encode(file_get_contents("../img/42.png"));
		echo "<html><body>Bonjour Zaz<br /><img src='data:image/png;base64,$img'></body></html>\n";
	}
	else
	{
		header("WWW-Authenticate: Basic realm=''Espace membres''");
		header("HTTP/1.0 404 Unauthorized");
		header("Content-Length: ");
		header("Connection: close");
		echo "<html><body>Cette zone est accessible uniquement aux membres du site</body></html>\n";
	}

?>
