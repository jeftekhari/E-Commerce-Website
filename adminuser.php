<?PHP

$add = $_POST['Add'];
$edit = $_POST['Info'];
$del = $_POST['Delete'];

if ($add)
{
	echo '<html>';
	echo '<a href="admincreateuser.html">Create new user</a></form>';
	echo '</html>';
}
if ($edit)
{
	echo '<html>';
	echo '<a href="adminmodifyuser.html">Modify User</a>';
	echo '</html>';
}
if ($del)
{
	echo '<html>';
	echo '<a href="admindeleteuser.html">Delete User';
	echo '</html>';
}
?>
