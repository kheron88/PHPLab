<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include 'validator.php';

        $fullname = "";
        $email = "";
        $comments = "";

    if ( count($_POST) ) {
               
        if ( array_key_exists("fullname", $_POST) ) {
            $fullname = $_POST["fullname"];
        }

        if ( array_key_exists("email", $_POST) ) {
            $email = $_POST["email"];
        }

        if ( array_key_exists("comments", $_POST) ) {
            $comments = $_POST["comments"];
        }
    } 
    
    $valObj = new validator();
    
    if ( $valObj->isFullNameValid($fullname) ) {
        echo "<p>Full name is valid.</p>";
    } else {
         echo "<p>Full name is NOT valid.</p>";
    }
    
    
    if ( $valObj->validateFullName($fullname) && !empty($email) && !empty($comments) ) { 
        
        $dbh = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");

         try {
            $stmt = $dbh->prepare('insert into week3 set fullname = :fullnameValue, '
                    . 'email = :emailValue, comments = :commentsValue');

            $stmt->bindParam(':fullnameValue', $fullname, PDO::PARAM_STR);
            $stmt->bindParam(':emailValue', $email, PDO::PARAM_STR);
            $stmt->bindParam(':commentsValue', $comments, PDO::PARAM_STR);
            
            if ( $stmt->execute() ){
                echo "<h3>Info Submited</h3><p><a href='index.php'>Back to form</a></p>";
            } else {
                echo "<h3>Info NOT Submited</h3><p><a href='index.php'>Back to form</a></p>";
            }

           } catch( PDOException $e) {
               echo "DataBase Error";

           }
        
    } else {
         echo "<h3>Info NOT Submited</h3><p><a href='index.php'>Back to form</a></p>";
    }
     
 

?>
