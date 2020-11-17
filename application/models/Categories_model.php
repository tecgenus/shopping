<?php

class Categories_model extends CI_Model
{

    public function categories_add()
    {    
        
        $data = array(
            'title' => $this->input->post('title'),
            'level' => $this->input->post('level'),
            'parent' => $this->input->post('parent'),
            'status' => $this->input->post('status')
        );
       return $this->db->insert('category', $data);
    }   
}
?>