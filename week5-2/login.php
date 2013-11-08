<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
    </head>
    <body>
        <?php
        // put your code here
          Login::processLogin();          
        ?>        
        <form action="#" method="post">            
            Passcode <input type="password" name="passcode" value="" />
            <br />            
            <input type="submit" value="Submit" />            
        </form>
        
    </body>
</html>

