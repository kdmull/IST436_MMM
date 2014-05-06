<!DOCTYPE html>
<html lang="en">
    
    <?
        session_start();
    ?>
    
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Signin Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">
      <form class="form-signin" role="form" action= 'signupphp.php' method='post'>
        <h2 class="form-signin-heading">New Account</h2>
        <input type='text' class='form-control' placeholder='Username' name='username' id='username' value='' />
        <input type='password' class='form-control' placeholder='Password' name='password' id='password1' value=''/>
        <input type='password' class='form-control' placeholder='Confirm Password' name='confirmpassword' id='confirmpassword' value=''/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
          
          
           <?
        if($_SESSION['signuperror1'] == 1)
        {
    ?>
            <h3>Passwords do <br>not match!</h3>
    <?
            $_SESSION['signuperror1'] = 0;
        }

        if($_SESSION['signuperror2'] == 1)
        {
    ?>
            <h3>Username <br>already exists!</h3>
    <?
            $_SESSION['signuperror2'] = 0;
        }
    ?>
          
          
      </form>

    </div> <!-- /container -->
      


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>