<?php
    class Image_model extends CI_Model{
        function __construct(){
            parent::__construct();
        }
        function createNewImage($imageurl, $gatheringId){
            $data = array('imageurl' => $imageurl, 'gatheringid' => $gatheringId);
            $this->db->insert('photourl', $data);
       
            if ($this->db->_error_message()){
                echo $this->db->error_message();
            }else{
                echo "0";
       }
            
        }
        
        
        
    }

