<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Crud_model extends CI_model
{
	function __construct()
    {
        parent::__construct();
    }

 function user_login($username,$password){
 	$this->db->where('username',$username);
 	$this->db->where('password',$password);
 	$qry=$this->db->get('users');
 	if($qry->num_rows()){
 		return $qry->row();
 	}else{
 		return false;
 	}

 }
}