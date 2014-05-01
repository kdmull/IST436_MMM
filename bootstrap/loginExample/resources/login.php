<?
    // set up a session
    session_start();
    
    // PHP-based, mySQL login authenticator via AJAX
    
    // connect to our database
    $conn = mysqli_connect("localhost", "ist436login",
                           "ist436login", "ist436login");
    
    // build a query to check whether the entered username
    // and password match any records found within the DB or
    // not
    
    // BUILT a  user in the databse with:
    // insert into login values (null, 'morgan16', md5('pass'));
    $query = "select count(*) NUM from login where
                log_username='$_POST[username]' and
                log_password='" . md5($_POST[password]) . "'";
                
    // run query
    $res = mysqli_query($conn, $query);
    
    // check the result of the query to see if a match was found or not
    $row = mysqli_fetch_array($res);
    if ($row[NUM] == 0)
    {
        // no match found
        echo false;
        $_SESSION[authenticated] = false;
    }
    else if ($row[NUM] == 1)
    {
        // single match found
        echo true;
        $_SESSION[authenticated] = true;

    }
    else
    {
        echo false;       // catchall
        $_SESSION[authenticated] = false;
    }

        
    // SIDE NOTE:
    // Altered the table to ensure unique usernames
    // ALTER TABLE login
    //      ADD CONSTRAINT uc_logUser UNIQUE (log_username);
?>