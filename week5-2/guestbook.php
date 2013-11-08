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
        <title>My Guestbook</title>
    </head>
    <body>
        <?php
        // put your code here        
        Login::confirmAccess();
        
        
        $gb = new Guestbook();
        $gb->processGuestbook();
        $gb->displayGuestbook();
        
        
        $guestbook = new Guestbook();
        
         if ( count($_POST) ) {
             
             $guestbook = new Guestbook();
              
             if ( entryIsValid() ){
                 echo "valid";
                 $guestbook->saveEntry();
             }
         }
        
        ?>
    <form action="#" method="post">
     Name <input type="text" name="name" value="" /> <br />
     E-mail <input type="text" name="email" value="" /> <br />
     Comments <input type="text" name="comments" value="" />  <br />
     <br />
     <input type="submit" value="submit" />

    </form>
        
    </body>
</html>
