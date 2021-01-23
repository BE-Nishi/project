<?php
class Contact_model extends CI_Model{
    public function contact($formarray){
        
        $this->db->insert('contact',$formarray);
        
    }
}


?>
