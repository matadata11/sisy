<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardA extends Admin_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengguna', 'pengguna');
        
    }
    

    public function index()
    {
        $this->vars['count_admin']	= $this->pengguna->countAdmin();
        $this->vars['count_super']	= $this->pengguna->countSuper();

        $this->vars['title']    = 'Dashboard';
        $this->vars['content']  = 'backend/dashboard';
        $this->load->view('backend/main', $this->vars);
    }

}

/* End of file Dashboard.php */
