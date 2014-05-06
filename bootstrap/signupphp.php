<?
	session_start();
	require_once "mysql.php";

	$db = new database();
	
	$result = $db->select('username', 'user', "username = '" . $_POST['username'] . "'");	 
	
	$row = $db->fetch($result);
	

	
	if ($_POST['username'] != $row['username']) 
 	{
		if ($_POST['password'] == $_POST['confirmpassword'])
		{
			$db->insert('user',"(NULL, '" . $_POST['username'] . "', '" . $_POST['password'] . "')");
            
            $_SESSION['signupmessage']= 1;
            
            header("Location: http://isat-cit.marshall.edu/ist436/mmm/");

			
		
		}
		else
		{
		
			$_SESSION['signuperror1']= 1;
            header("Location: http://isat-cit.marshall.edu/ist436/mmm/signup.php");
		}
		
		
 	}
	else
	{
		
		$_SESSION['signuperror2']= 1;
        header("Location: http://isat-cit.marshall.edu/ist436/mmm/signup.php");
	}	
	
?>