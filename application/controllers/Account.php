
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
			$this->load->database();
			$this->load->model('Account_model');
		}

	public function index()
	{
		$ammount=20;
		$senser_id=1;
		$receiver_id=2;

		$this->Account_model->transfer($ammount,$senser_id,$receiver_id);
		
	}

}

/* End of file Account.php */
/* Location: ./application/controllers/Account.php */