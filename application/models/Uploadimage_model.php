<?php
    class Uploadimage_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        function createnewimage($imageurl){
            $data = array('imageurl' => $imageurl);
            $this->db->insert('photourl', $data);
       
            if ($this->db->_error_message()){
                echo $this->db->error_message();
            }else{
                echo "0";
       }
            
        }
        
        
        
    }

?>
