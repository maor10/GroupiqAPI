<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
    
    
    function index(){
        echo "YO";
    }
    /**
     * Creates user via facebook
     */
    function createFbUser(){
        $token = $this->input->post('token');
        $this->load->model('Users_model');
        echo $this->Users_model->createNewFbUser($token);
    }
    
    /**
     * Creates user on system
     * @echo 0 if successful, error message if not
     */
    function createUserWithEmailAndPassword(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('Users_model');
        echo $this->Users_model->createNewUserWithEmailAndPassword($email,$password);
    }
    
    /**
     * Creates user on system
     * @echo 0 if successful, error message if not
     */
    function logInWithEmailAndPassword(){
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->load->model('Users_model');
        echo $this->Users_model->loginUserWithEmailAndPassword($email,$password);
    }
    
    
    
}

