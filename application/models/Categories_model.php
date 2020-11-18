<?php

class Categories_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }
    public function categories_add()
    {    
        $newfilename = '';
        if(isset($_FILES['image']))
        {
            $target_dir = "uploads/";
            $name=pathinfo($_FILES['image']['name'], PATHINFO_FILENAME).'_'.time();
            $extension=pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            $newfilename=$name .".".$extension;
            $target_file = $target_dir . $newfilename;
            $imageFileType = pathinfo($target_file.'_'.time().'.',PATHINFO_EXTENSION);
            $pro=move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
          }
          else
          {
            $img_check=1;
          }


        $data = array(
            'title' => $this->input->post('title'),
            'level' => $this->input->post('level'),
            'parent' => $this->input->post('parent'),
            'image' => $newfilename,
            'status' => $this->input->post('status')
        );
       return $this->db->insert('category', $data);
    } 
    public function get_category($data,$tablename,$where)
    {
        $query = $this->db->select($data)
        ->from($tablename)
        ->where($where)
        ->get();
        return $query->result_array();
    }
}
?>