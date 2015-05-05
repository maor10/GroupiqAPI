<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploadimage extends CI_Controller {
	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '1000000';
		$config['max_width']  = '2048';
		$config['max_height']  = '2048';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
                        echo json_encode($error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
                        echo "0";
		}
	}
    
    
    
}
?>