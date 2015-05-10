<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Gatherings_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function createNewGathering($name, $startDate, $public, $latitude, $longitude) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, 5 );

        $data = array('creatorid'=>  $this->session->userdata("UserID"), 'name' => $name, 'public'=>$public, 'password' => $password);
        $this->db->insert('gatherings', $data);

        if ($this->db->_error_message()) {
            return $this->db->error_message();
        } else {
            return $this->db->insert_id();
        }
    }
    function joingathering($password){
        $this->db->select("*");
        $this->db->from("gatherings");
        $this->db->where("password", $password);

        $query = $this->db->get();
        $result = $query->result();

        if(count($result) == 0){
            return "-1";
        }
        else{
            $gathering = $result[0];
            return "-2";
        }

    }

}
