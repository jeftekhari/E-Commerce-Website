<?PHP

$login = $_POST['login'];
$password = $_POST['passwd'];
$submit = $_POST['submit'];

if ($login && $password && $submit && $submit == "OK")
{
	if (!file_exists("../private"))
		mkdir("../private");
	if (!file_exists("../private/passwd"))
		file_put_contents("../private/passwd", null);
	$contents = unserialize(file_get_contents("../private/passwd"));
	if ($contents)
	{
		$taken = 0;
		foreach ($contents as $key => $i)
		{
			if ($i['login'] === $login)
				$taken = 1;
		}
	}
	if (8 > (strlen($tmp['login'])))
	{
		echo "8 Characters Maximum Please";
		echo '<html>';
		echo '</br><a href="create.html">Retry</a>';
		echo '</html>';
		return FALSE;
	}
	if ($taken)
	{
		echo "That Username is taken.\n";
		echo "<html>";
		echo '</br><a href="create.html">Try Again?</a>';
	}
	else
	{
		$tmp['login'] = $login;
		$tmp['passwd'] = hash('whirlpool', $password);
		$contents[] = $tmp;
		file_put_contents('../private/passwd', serialize($contents));
		echo "OK\n";
		echo '<html>';
		echo '</br><a href="login.html">Login Home</a>';
	}
}
else
	echo "ERROR\n";
?>
