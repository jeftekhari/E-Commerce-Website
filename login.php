<?PHP
	session_start();
	include("auth.php");

	if ($_GET["login"] && $_GET["passwd"] && auth($_GET["login"], $_GET["passwd"]))
	{
		$_SESSION['loggued_on_user'] = $_GET["login"];
		echo "OK";
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "User and/or Pass Not Found\n";
		echo "<html>";
		echo "<body>";
		echo '</br><a href="login.html">Try Again?</a>';
		echo '</br><a href="create.html">New User?</a>';
	}
?>

