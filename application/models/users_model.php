<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Users_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function createNewFbUser($token) {
        $data = array('facebooktoken' => $token);
        $this->db->insert('users', $data);

        if ($this->db->_error_message()) {
            return $this->db->error_message();
        } else {
            return "0";
        }
    }

    function createNewUserWithEmailAndPassword($email,$password) {
        $data = array('email' => $email, 'password' => md5($password));
        $this->db->insert('users', $data);
        if ($this->db->_error_message()) {
            return $this->db->error_message();
        } else {
            return "0";
        }
    }

    function loginUserWithEmailAndPassword($email, $password) {
        $this->db->select('*')->from('users')->where('password', md5($password))->where('email', $email);
        if ($this->db->_error_message()) {
            return $this->db->error_message();
        } else {
            $query = $this->db->get();
            $result = $query->result();
            if(count($result) == 0){
                return "1";
            }else{
                $this->session->set_userdata('UserID', $result[0]->id);
                //Here we should be getting list of events the user is in, or whatever info needs to be shown on the home screen
                return "0";
            }
                return "0";
        }
    }

}
