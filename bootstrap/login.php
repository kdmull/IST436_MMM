<? 
	session_start();
	require_once "mysql.php";

	$db = new database();

		
	$result = $db->select('userID, username, password', 'user', "username = '" . $_POST['username'] . "'");	 
	
	$row = $db->fetch($result);
	
	
	if ($_POST[password] != $row['password']) 
 	{
		echo "BAD USERNAME/PASSWORD";
 	}
	else
	{
		$_SESSION['userID'] = $row['userID'];
		header("Location: http://isat-cit.marshall.edu/ist436/mmm/contacts.html");
	}	
?>