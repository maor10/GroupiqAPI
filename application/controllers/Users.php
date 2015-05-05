<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
    function createFbUser(){
        $token = $this->input->post('token');
        $this->load->model('Users_model');
        $this->Users_model->createNewFbUser($token);
        echo "0";
    }
    function createUserWithEmailAndPassword(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('Users_model');
        $this->Users_model->createNewUserWithEmailAndPassword($email,$password);
    }
}

?>