<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Gatherings extends CI_Controller {

    function createGathering() {
        $name = $this->input->post('Name');
        $isPublic = $this->input->post('Public');
        $this->load->model("gatherings_model");
        
        echo $this->gatherings_model->createNewGathering($name, NULL, $isPublic, null, NULL);

    }
    function joinGathering(){
    	$password = $this->input->post("Password");
    	$this->load->model("gatherings_model");
    	echo json_encode($this->gatherings_model->joinGathering($password));

    }

}