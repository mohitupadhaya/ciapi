<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('Crud_model');
        $this->load->library('session');
        $this->load->library('form_validation');
        $this->load->helper('form');
         } 

	public function index()
	{
		$this->load->view('login_page');
	}

    public function admin_login(){
        $this->form_validation->set_rules('userName','Username','required');
        $this->form_validation->set_rules('password','Password','required');
        if($this->form_validation->run()){
        $username=$this->input->post('userName');
        $password=$this->input->post('password');
        $id=$this->Crud_model->user_login($username,$password);
        if($id){
        $this->session->set_userdata('user_id',$id);
        redirect(base_url().'dashboard','refresh');
        }else{
        $this->session->set_flashdata('error','invalid username & password');
        redirect(base_url(),'login');
        }
        }else{
        $this->load->view('login_page');
        }
    }
    public function admin_logout(){
        $this->session->unset_userdata('user_id');
        return redirect(base_url().'login');
    }
}