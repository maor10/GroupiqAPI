<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Image extends CI_Controller {

    function addImageToEvent() {
        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = '*';
        $config['max_size'] = '1000000';
        $config['max_width'] = '2048';
        $config['max_height'] = '2048';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload()) {
            $error = array('error' => $this->upload->display_errors());
            echo json_encode($error);
        } else {
            $data = $this->upload->data();
            echo "0";
        }
    }

}

