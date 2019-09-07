<?php 
 /**
  * 
  */
 class lost extends CI_Controller
 {

 	
 	public function __construct()
 	{
 		parent::__construct();
 		# code...
 	}
 public function index(){
 	$this->load->view('view_lost');
 }

 }

 ?>