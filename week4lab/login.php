<?php include 'dependency.php'; ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here       
       $username = ( isset($_POST["username"]) ? $_POST["username"] : "" );
       $password = ( isset($_POST["password"]) ? $_POST["password"] : "" );
        /*
         * If user is logged in redirect to admin page.
         */
            if ( !empty($username) 
                    && !empty($password) 
                    && Validator::loginIsValid($username,$password)
                ) {
               $_SESSION["isLoggedIn"] = true;
               header("Location: admin.php");
               echo "valid";
            } else {
                /*
                 * only show message if a post has been made
                 */  
                    if (count($_POST)){
                    echo "<p>User name or password is incorrect.</p>";
                    
                    };
            }
  

        
      
        

        ?>
        
        
        <form name="mainform" action="login.php" method="post">
            
            username: <input type="text" name="username" /><br />
            password: <input type="password" name="password" /><br />
            
            <input type="hidden" name="token" value="<?php echo $token; ?>" />
            <input type="hidden" name="email" value="" />
          
            <input type="submit" value="Submit" />
            
        </form>
        
    </body>
</html>
