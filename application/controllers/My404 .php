<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class My404 extends Admin_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url'); 
	}
	
	
	public function index()
	{
		$this->output-set_status_header('404');
		$this->template->render('error', array());
		
	}

}

/* End of file My404.php */
