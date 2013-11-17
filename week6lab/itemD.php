<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Item D</title>
    </head>
    <body>
        <?php
        
        session_start();
        
        if ( !isset($_SESSION['auth']) || $_SESSION['auth'] != true ){
        
            header("Location:itemC.php");
        }
        
       /*
        * Please follow the instructions below.
        * 
        * you might not know that you can have two different forms on the
        *  page but only one can be processed
        * 
        * 1. Now having some experince with $_POST run the function print_r($_POST)
        * and submit each form.
        * 
        * 2.  Create some logic that will display the data based on which form was
        * submited.  A trick is to assign the submit button with a name and check to
        * see if that name exist in the $_POST array with array_key_exists('key', $_POST)
        * Make sure the name is uqniue.
        * 
        */
       
        // put your code here
        ?>
        
        <h1>Signup</h1>
        <form action="#" method="post">            
            <label>Name</label> <input type="text" name="name" value="" /> <br />
            <label>Email</label> <input type="text" name="email" value="" /> <br />
            <label>Password</label> <input type="password" name="password" value="" /> <br />
           
            <input type="submit" name="signup" value="Submit" />
        </form>
        
		<?php 
            if (count($_POST) && array_key_exists('signup', $_POST) ){
                $name = ( isset($_POST["name"]) ? $_POST["name"] : "" );
                $email = ( isset($_POST["email"]) ? $_POST["email"] : "" );
                    if (preg_match("/[A-Za-z0-9_]{2,}+@[A-Za-z0-9_]{2,}+\.[A-Za-z0-9_]{2,}/",$email) == 0 ){
                        echo "email is invalid<br />";
                        }	
                $password = ( isset($_POST["password"]) ? $_POST["password"] : "" );

                if (!empty($name) && !empty($password) && !empty($email)) {
                    print_r($_POST);
                } else {
                        echo "Blank fields on form";
                }

            }

		
		?>
		
         <h1>Login</h1>
        <form action="#" method="post">            
            <label>Email</label> <input type="text" name="email" value="" /> <br />
            <label>Password</label> <input type="password" name="password" value="" /> <br />
           
            <input type="submit" name="login" value="Submit" />
        </form>
		<?php 
				if (count($_POST) && array_key_exists('login', $_POST) ){
				
					$email = ( isset($_POST["email"]) ? $_POST["email"] : "" );
                                        if (preg_match("/[A-Za-z0-9_]{2,}+@[A-Za-z0-9_]{2,}+\.[A-Za-z0-9_]{2,}/",$email) == 0 ){
                                        echo "email is invalid<br />";
                                        }
					$password = ( isset($_POST["password"]) ? $_POST["password"] : "" );
					
					if (!empty($email) && !empty($password) ) {
					print_r($_POST);
					
					} else {
						echo "Blank fields on form";
					}
					
				}

		?>
    </body>
</html>