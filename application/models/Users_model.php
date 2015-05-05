<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users_model extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
    
    
    function createNewFbUser($token){
       $data = array('facebooktoken' => $token);
       $this->db->insert('users', $data);
       
       if ($this->db->_error_message()){
           echo $this->db->error_message();
       }else{
           echo "0";
       }
    }
    function createNewUserWithEmailAndPassword($password, $email){
        $data = array('password' => $password, 'email' => $email);
        $this->db->insert('users', $data);
        if($this->db->_error_message()){
            echo $this->db->error_message();
        }else {
            echo "0";
        
    }
    
    }
}
    