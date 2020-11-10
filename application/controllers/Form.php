<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form extends CI_Controller {
	public function __construct()
			{
				parent::__construct();
				$this->load->model('Form_model');
			}

	public function create_form()
	{

		$this->load->view('pages/admin/index');
	}
	public function add_data()
		{
			$this->Form_model->insert_data();

			echo "<script> alert('data inserted sucessfully')</script>";

			return $this->load->view('pages/admin/index');
		}
		public function index()
	{

		$this->load->view('pages/user/home');
	}

}