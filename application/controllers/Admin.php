<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Form_model');
		$this->load->model('Admin_model');
		$this->load->model('Categories_model');
	}

	public function login()
	{
		$this->load->view('pages/admin/login');
	}

	public function logout()
	{
		$this->Admin_model->logout();
	}

	public function index()
	{
		$this->load->view('pages/admin/categories');
	}

	public function authenticate()
	{
		$this->Admin_model->validate_user();
	}

	public function category()
	{
		$this->load->view('pages/admin/categories');
	}

	public function categorytable()
	{
		$this->load->view('pages/admin/categories_table');
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
	public function add_categories()
	{
		
		$this->Categories_model->categories_add();
		
		echo "<script> alert('data inserted sucessfully')</script>";
		
		redirect('admin/category', 'refresh');
		return $this->load->view('pages/admin/categories');
	}
	public function categories_display()
    {
	   $data['category']=$this->Categories_model->get_category();
	   $this->load->view('pages/admin/categories_table',$data);
    }

}