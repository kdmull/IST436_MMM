<?
	session_start();
	require_once "mysql.php";

	$db = new database();
	
	$result = $db->select('username', 'user', "username = '" . $_POST['username'] . "'");	 
	
	$row = $db->fetch($result);
	
	if ($_POST['username'] != $row['username']) 
 	{
		db->insert('user',"1, '" . $_POST['username'] . "', '" . $_POST['password'] . "', 1");
		header("Location: http://isat-cit.marshall.edu/ist436/mmm/login.html");
 	}
	else
	{
		echo "USERNAME ALREADY EXISTS";
	}	
	
?>