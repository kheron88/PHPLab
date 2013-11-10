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
        <title>My Guest book</title>
    </head>
    <body>
        <?php
        // put your code here        
        Login::confirmAccess();
        
        
        $gb = new Guestbook();
        $gb->processGuestbook();
        $gb->displayGuestbook();
        
        $entryErrors = array();
                
         if ( count($_POST) ) {
             
             $guestbookClass = new Guestbook();
              
             if ( $guestbookClass->entryIsValid() ){
                 echo "valid";
                 $guestbookClass->saveEntry();
             }else {
                 $entryErrors = $guestbookClass->getErrors();  
             }
         }
        
        ?>
    <form action="#" method="post">
     Name <input type="text" name="name" value="" /> <br />
        <?php 
        if( !empty($entryErrors["name"]) ) {
           echo '<p>',$entryErrors["name"],'</p>';
        }
        ?>
     E-mail <input type="text" name="email" value="" /> <br />
        <?php 
        if( !empty($entryErrors["email"]) ) {
           echo '<p>',$entryErrors["email"],'</p>';
        }
        ?>     
     Comments <input type="text" name="comments" value="" />  <br />
        <?php 
        if( !empty($entryErrors["comments"]) ) {
           echo '<p>',$entryErrors["comments"],'</p>';
        }
        ?>     
     <br />
     <input type="submit" value="submit" />

    </form>
        
    </body>
</html>
