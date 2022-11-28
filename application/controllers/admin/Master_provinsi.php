<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_provinsi extends Admin_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_provinsi', 'provinsi');
        
    }
    

    public function index()
    {
        $this->vars['provinsi']	= $this->provinsi->getProvinsi();

        $this->vars['title']    = 'Mater Provinsi';
        $this->vars['content']  = 'master/master_provinsi';
        $this->load->view('backend/main', $this->vars);   
    }

    // add
    public function created()
	{
		$this->form_validation->set_rules('nm_provinsi', 'Instansi', 'required');

		if ($this->form_validation->run() == TRUE) {
			if (isset($_POST['submit'])) {
				$nm_provinsi 		= $this->input->post('nm_provinsi', TRUE);

				$data = [
					'nm_provinsi'		=> $nm_provinsi,
					'created_at'	=> date('Y-m-d')
				];
			}
			$notif = $this->provinsi->entry($data);
			if ($notif) {
				$this->session->set_flashdata('notrue', 'Data Berhasil Disimpan.');
			} else {
				$this->session->set_flashdata('nofalse', 'Data Gagal Disimpan.');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

    // edit
    public function updated()
	{
		$this->form_validation->set_rules('nm_provinsi', 'nm_provinsi', 'required');

		if ($this->form_validation->run() == TRUE) {
			if (isset($_POST['submit'])) {
				$id_provinsi 	    = $this->input->post('id_provinsi', TRUE);
				$nm_provinsi 		= $this->input->post('nm_provinsi', TRUE);

				$data = [
					'id_provinsi'	=> $id_provinsi,
					'nm_provinsi'	=> $nm_provinsi,
					'updated_at'	=> date('Y-m-d')
				];
			}
			$notif = $this->provinsi->update($data, $id_provinsi);
			if ($notif) {
				$this->session->set_flashdata('notrue', 'Data Berhasil Diupdate.');
			} else {
				$this->session->set_flashdata('nofalse', 'Data Gagal Diupdate.');
			}
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	// Hapus data jurusan
	public function deleted()
	{
		$notif = $this->provinsi->delete();
		if ($notif) {
			$this->session->set_flashdata('notrue', 'Data Berhasil Dihapus.');
		} else {
			$this->session->set_flashdata('nofalse', 'Data Gagal Dihapus.');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

}

/* End of file Master_provinsi.php */
