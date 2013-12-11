<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo "test1";


$username = filter_input(INPUT_POST, "login");
$msg = "login name is not valid";
$passed = false;


if (is_string($username) && !empty($username) ) {
    $passed = true;
    $db = new PDO("mysql:host=localhost;port=3306;dbname=phplab","root","");
    $statement = $db->prepare('select * from login where username = :username');
    $statement->bindParam(':username', $username, PDO::PARAM_STR);
    $statement->execute();
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    
    if (is_array($result) && count($result) ) {
        $msg = "login name is taken";       
    }else {
         $msg = "login name is available";
         
    }
    
 }

$results = array(
            'msg' => $msg,
            'valid' => $passed,
            'login' => $username
            );


//
echo json_encode($results);

/*
 * 
 * 
 * 
 * 
 * 






if ( !isset($_SESSION['count']) ) {
    $_SESSION['count'] = 0;
}

$_SESSION['count']++;


try {
            
        $stmt = $db->prepare('select * from login');
            
            $stmt->bindParam(':usernameValue', $username, PDO::PARAM_STR);
            $stmt->bindParam(':emailValue', $email, PDO::PARAM_STR);
            $stmt->bindParam(':passwordValue', $password, PDO::PARAM_STR);
            
            if ( $stmt->execute() ){
                $sucessMsg = "<h3>Info Submited</h3>";
            } else {
                $errorMsg = "<h3>Info NOT Submited</h3>";
            }

        } catch( PDOException $e) {
            echo "DataBase Error";

        }






$test = filter_input(INPUT_POST, "login");

 $passed = false;
 $msg = "login is not valid";
 
if (is_string($test) ) {
    $passed = true;
    $msg = "login is valid";
}

$results = array(
            'msg' => $msg,
            'passed' =>  $passed,
            'login' => $test,
            'attempts' => $_SESSION['count']
        );

echo json_encode($results);


*/



//echo "<table border='4'><tr><th>row</th></tr><tr><td>1</td></tr></table>";


?>