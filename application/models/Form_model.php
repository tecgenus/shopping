<?php

class Form_model extends CI_Model
{

    public function insert_data()
    {    
        //  print_r($_FILES['image']['name']);
        // exit;
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

      /*else
      {
        $target_file="img/employee/avatar.jpg";
      }*/
        $data = array(
            'title' => $this->input->post('title'),
            'description' => $this->input->post('description'),
            'image' => $newfilename
        );
        $this->load->helper('date');
        $data['created_at'] = date('Y-m-d');
        $data['modified_at'] = date('Y-m-d');

        // users is the name of the db table you are inserting in
        return $this->db->insert('form', $data);
    }   
}
?>