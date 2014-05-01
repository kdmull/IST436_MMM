
    // set up our jQuery
    $(document).ready(function()
    {
        // when we click the element whose ID is submit, call our ajax function
        $('#submit').click(function()
        {
            $.ajax({
                 type: "POST",
                 url: "resources/login.php",
                 data: { username: $('#username').val(),
                         password: $('#password').val() }
                })
                .done(function( msg ) {
                     // if AJAX completes successfully you will be
                     // within this function.  Anything returned
                     // by the URL listed above will be contained
                     // in the variable msg
                     if (msg == true)
                        window.location.href = "page2.php";
                     else
                     {
                        $('#error').css("color", "red");
                        $('#error').html('Bad username or password');
                     }
                 });
        });
        
        $('#username').keyup(function()
        {
            $('#error').css('display', 'none');
        });
    });