<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_pengguna extends Admin_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_pengguna', 'pengguna');
        $this->load->model('M_kabupaten', 'kabupaten');
        
    }
    

    public function index()
    {
        $this->vars['pengguna']	= $this->pengguna->getPengguna();
        

        $get_prov = $this->db->select('*')->from('mt_provinsi')->get();
        $this->vars['provinsi'] = $get_prov->result();

        $this->vars['title']    = 'Mater Pengguna';
        $this->vars['content']  = 'master/master_pengguna';
        $this->load->view('backend/main', $this->vars);
    }

    public function store()
    {
        if(isset($_POST['submit'])){
            $provinsi_id            = $this->input->post('provinsi_id', TRUE);
            $kabupaten_id           = $this->input->post('kabupaten_id', TRUE);
            $admin                  = $this->input->post('admin', TRUE);
            $instansi               = $this->input->post('instansi', TRUE);
            $fullname               = $this->input->post('fullname', TRUE);
            $email                  = $this->input->post('email', TRUE);
            $kupassword             = $this->input->post('kupassword', TRUE);
            $level                  = $this->input->post('level', TRUE);

            $data = [
                'provinsi_id'       => $provinsi_id,
                'kabupaten_id'      => $kabupaten_id,
                'admin'             => $admin,
                'instansi'          => $instansi,
                'fullname'          => $fullname,
                'email'             => $email,
                'kupassword'        => password_hash($kupassword, PASSWORD_DEFAULT),
                'level'             => $level,
                'is_active'         => 0,
                'created_at'        => date('Y-m-d')
            ];
        }
        $save = $this->pengguna->entry($data);
        if($save){
            $this->session->set_flashdata('notif_true', 'Data Berhasil Ditambahkan.');
        }else{
            $this->session->set_flashdata('notif_false', 'Data Gagal Ditambahkan.');
        }
        redirect($_SERVER['HTTP_REFERER']);
    }

     // Hapus data jurusan
	public function deleted()
	{
		$notif = $this->pengguna->delete();
		if ($notif) {
			$this->session->set_flashdata('notrue', 'Data Berhasil Dihapus.');
		} else {
			$this->session->set_flashdata('nofalse', 'Data Gagal Dihapus.');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

}

/* End of file Master_pengguna.php */
