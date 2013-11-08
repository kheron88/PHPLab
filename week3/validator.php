<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of validator
 *
 * @author GFORTI
 */
class Validator {
    //put your code here
    
    
    public function __construct() {
        
    }
    
   public function isFullNameValid( $fullname ) {
        
        if ( is_string($fullname) && !empty($fullname) ) {
            return true;
        }
        
        return false;  
    }
    
   public function isEmailValid( $email ) {
        
        if ( is_string($email) && !empty($email) ) {
            return true;
        }
        
        return false; 
        
    }
    
    
}
