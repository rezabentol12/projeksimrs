<?php 

/**
 * 
 */
class Login extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		
		# code...
	}
	public function index(){
		$this->load->view('viewlogin');
	}
}

 ?>