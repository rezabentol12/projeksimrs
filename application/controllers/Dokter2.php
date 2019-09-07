<?php 

/**
 * 
 */
class Dokter2 extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		# code...
	}
	public function index(){
		$data['title']='list dokter';
		$data['page']='viewdokter'
		
		$this->load->view('patical/header');
		$this->load->view('patical/maincontent');
		$this->load->view('patical/footer');

	}
}

 ?>