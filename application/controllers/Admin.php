<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Form_model');
	}
	public function index()
	{

		$this->load->view('pages/admin/categories');
	}
	public function category()
	{

		$this->load->view('pages/admin/categories');
	}

	public function create_form()
	{

		$this->load->view('pages/admin/form');
	}
	public function add_data()
	{
		$this->Form_model->insert_data();

		echo "<script> alert('data inserted sucessfully')</script>";

		return $this->load->view('pages/admin/index');
	}
}