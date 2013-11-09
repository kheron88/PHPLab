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
        
            $username = "";
            $password = "";
        
            $usernameErr = "";
            $passwordErr = "";
            
            if ( count($_POST) ) {
                
                if ( !array_key_exists("username", $_POST) || empty($_POST["username"]) ) {
                   $usernameErr = "Please enter a valid User Name"; 
                } else {
                    $username = $_POST["username"];
                }
                
                if ( !array_key_exists("password", $_POST) || empty($_POST["password"]) ) {
                   $passwordErr = "Please enter a valid Password";                 
                } else {
                   $password = $_POST["password"];
                }
                
				// add validation for email, use filter_var
				
				// add validation for comments
				
				// display error messaages next to the field.
                
            }
        ?>
            
        <h1> User Login Form </h1>
        <form name="mainform" method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">            
            <label>User Name:</label> <input type="text" name="username" value="<?php echo $username;?>" /> <?php echo $usernameErr ?> <br />
            <label>Password:</label> <input type="text" name="password" value="<?php echo $password;?>" /> <?php echo $passwordErr ?> <br />
            <input type="submit" value="Submit" />
        </form>

    </body>
</html>
