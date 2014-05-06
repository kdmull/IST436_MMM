<?
    session_start();
    require_once "mysql.php";

    $db = new database();
    
    

    $db->insert('contact',"(NULL, '" . $_POST['firstname'] . "', '" . $_POST['lastname'] . "', " . $_SESSION['userID'] . ")");
    
    header("Location: http://isat-cit.marshall.edu/ist436/mmm/contacts.php");
    
?>

