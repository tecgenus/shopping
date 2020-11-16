<?php

class Admin_model extends CI_Model
{

    public function validate_user()
    {
      $this->session->set_userdata("login", "true");
      echo "1";
    }

    public function logout()
    {
      session_destroy();
      redirect(base_url().'admin/login/');
    }
}


?>