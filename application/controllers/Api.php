<?php
use Restserver\Libraries\REST_Controller;
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
 
// require(APPPATH.'/libraries/REST_Controller.php');
class Api extends REST_Controller
{
        public function __construct() {
               parent::__construct();
               $this->load->model('Apimodel');  
       }  

public function userlogin_post(){
	$userkey=$this->input->post('user_key');
	$userdata=$this->Apimodel->userLogin($userkey);
		// print_r($userdata);
	if(empty($userdata)){
		$this->response([
			'error'=>true,
			'responseCode'=>0,
			'message'=>'your user keys is incorrect',
		],REST_Controller::HTTP_OK);
	}
	if(!empty($userdata)){
		$data['user_id']=$userdata->user_id;
		$data['username']=$userdata->username;
		$data['first_name']=$userdata->first_name;
		$data['last_name']=$userdata->last_name;
		$data['email']=$userdata->email;
		$data['contact_number']=$userdata->contact_number;
		$data['user_key']=$userdata->users_key;
		$result[]=$data;
		$res['error']=false;
		$res['responseCode']=200;
		$res['message']="login successfully";
		$res['login_details']=$result;
		$this->response($res,REST_Controller::HTTP_OK);


	}
   }

   }
 