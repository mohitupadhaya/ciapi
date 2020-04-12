<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Apimodel extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
    }

   function userLogin($userkey){
   	$this->db->select('*');
   	$this->db->from('users');
   	$this->db->where('users_key',$userkey);
   	$qry=$this->db->get()->row();
   	return $qry;
   }
}