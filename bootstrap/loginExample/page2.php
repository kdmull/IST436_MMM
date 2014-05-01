<?
    // start a session to handle all session variables
    session_start();
    
    // if there is a session started, that has a variable
    // authenticated within it, whose value is true
    // it will show the page's contents
    // otherwise, it redirects back to the login
    if (!$_SESSION[authenticated] == true)
        header("location:/436/login/");
?>
<!DOCTYPE html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.css" />
        <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.4.0/jquery.mobile-1.4.0.min.js"></script>
    </head>
    
    <body>
        <div data-role='page' id='login'>
            <div data-role='header' data-position='fixed'>
                <h1>SECURED!  Warning!</h1>
            </div>
            <div data-role='content'>
                This is secured content... only visible if logged in.
            </div>
            <div data-role="footer" data-position="fixed">
                <p>&copy;2014, Marshall University</p>
            </div>
        </div>
    </body>
</html>