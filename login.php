<?php session_start() ?>
<html>
<head>
	<title>Error during login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="center">
<?PHP
	include("auth.php");

	if ($_GET["login"] && $_GET["passwd"] && auth($_GET["login"], $_GET["passwd"]))
	{
		$_SESSION['loggued_on_user'] = $_GET["login"];
		echo "OK";
	}
	else
	{
		$_SESSION['loggued_on_user'] = "";
		echo "<h1>User and/or Pass Not Found\n</h1>";
		echo "<html>";
		echo "<body>";
		echo '</br><a href="login.html">Try Again?</a>';
		echo '</br><a href="create.html">New User?</a>';
	}
?>
</div>
</body>
</html>
