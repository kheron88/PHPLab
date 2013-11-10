<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Guestbook
 *
 * @author kheron
 */
class Guestbook extends DB {
    //put your code here
protected $errors = array();

    public function getGuestbookData() {
        $result = array();
        $db = $this->getDB();        
        if ( NULL != $db ) {
            $stmt = $db->prepare('select name, email, comments from guestbook');
            $stmt->execute();            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return $result;        
    }
    
    public function displayGuestbook() {
        
        $results = $this->getGuestbookData();
        
        if ( count($results) ) {
            echo "<table border='1'>";
            echo "<tr><td>Name</td><td>E-mail</td><td>Comments</td></tr>";
            foreach($results as $row) {
                echo "<tr><td>", $row["name"], "</td><td>", $row["email"],
                        "</td><td>", $row["comments"], "</td></tr>";
            }
            echo "</table>";
        }else{
            echo "<p> No comemnts posted</p>";
        }
    }

    
    public function checkName(){
    if (isset($_POST["name"]) ) {
        
        if (Validator::nameIsValid($_POST["name"])){
            return true;
    } else{
        $this->errors["name"] = "Please enter a valid Name.";
    }
        
    }
}

    public function checkEmail(){
    if (isset($_POST["email"])) {
        
        if (Validator::emailIsValid($_POST["email"])){
            return true;
        }else{
        $this->errors["email"] = "Please enter a valid Email.";
    }
    } 
}

    public function checkComments(){
    if (isset($_POST["comments"])) {
        
        if (Validator::commentsIsValid($_POST["comments"])){
            return true;
        }
    } 
}

public function saveEntry() {
    if ( ! $this->entryIsValid() ) return false;
    
    $db = $this->getDB();
    if ( null != $db ) {
        $stmt = $db->prepare('insert into guestbook set name = :nameValue, '
                . 'email = :emailValue, comments = :commentsValue');
        $stmt->bindParam(':nameValue', $_POST["name"], PDO::PARAM_STR);
        $stmt->bindParam(':emailValue', $_POST["email"], PDO::PARAM_STR);
        $stmt->bindParam(':commentsValue', $_POST["comments"], PDO::PARAM_STR);
        if ( $stmt->execute() ){
            return true;
        }
    }       
    return false;
}

public function entryIsValid(){
    $this->checkName();
    $this->checkEmail();
    $this->checkComments();
    return ( count($this->errors) ? false : true );
}
    
    public function processGuestbook(){
        //check post data
        // put into Dababase
    }

    public function getErrors() {
        return $this->errors;
    }
}
