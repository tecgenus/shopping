<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Index extends CI_Controller {
	

	public function index()
	{
	// print_r($_SERVER['HTTP_HOST']); exit();
		$this->load->view('pages/user/home');
	}
	
}