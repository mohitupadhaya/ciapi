<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
               parent::__construct();
               $this->load->model('Crud_model');
               if(!$this->session->userdata('user_id'))  
               	redirect(base_url().'login');
         } 

	public function index()
	{
		$this->load->view('dashboard');
	}
}
