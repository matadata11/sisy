<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_kabupaten extends Admin_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_kabupaten', 'kabupaten');
        $this->load->model('M_provinsi', 'provinsi');
        
    }

    public function index()
    {
        $this->vars['provinsi']	= $this->provinsi->getProvinsi();
        $this->vars['kabupaten']	= $this->kabupaten->getKabupaten();

        $this->vars['title']    = 'Mater Kabupaten';
        $this->vars['content']  = 'master/master_kabupaten';
        $this->load->view('backend/main', $this->vars);  
    }

     // add
     public function created()
     {
         $this->form_validation->set_rules('provinsi_id', 'Id Provinsi', 'required');
         $this->form_validation->set_rules('nm_kabupaten', 'Instansi', 'required');
 
         if ($this->form_validation->run() == TRUE) {
             if (isset($_POST['submit'])) {
                 $provinsi_id 		= $this->input->post('provinsi_id', TRUE);
                 $nm_kabupaten 		= $this->input->post('nm_kabupaten', TRUE);
 
                 $data = [
                     'provinsi_id'		=> $provinsi_id,
                     'nm_kabupaten'		=> $nm_kabupaten,
                     'created_at'	=> date('Y-m-d')
                 ];
             }
             $notif = $this->kabupaten->entry($data);
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
		$this->form_validation->set_rules('provinsi_id', 'provinsi_id', 'required');
		$this->form_validation->set_rules('nm_kabupaten', 'nm_kabupaten', 'required');

		if ($this->form_validation->run() == TRUE) {
			if (isset($_POST['submit'])) {
				$id_kabupaten 	    = $this->input->post('id_kabupaten', TRUE);
				$provinsi_id 		= $this->input->post('provinsi_id', TRUE);
				$nm_kabupaten 		= $this->input->post('nm_kabupaten', TRUE);

				$data = [
					'id_kabupaten'	=> $id_kabupaten,
					'provinsi_id'	=> $provinsi_id,
					'nm_kabupaten'	=> $nm_kabupaten,
					'updated_at'	=> date('Y-m-d')
				];
			}
			$notif = $this->kabupaten->update($data, $id_kabupaten);
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
		$notif = $this->kabupaten->delete();
		if ($notif) {
			$this->session->set_flashdata('notrue', 'Data Berhasil Dihapus.');
		} else {
			$this->session->set_flashdata('nofalse', 'Data Gagal Dihapus.');
		}
		redirect($_SERVER['HTTP_REFERER']);
	}

}

/* End of file Master_kabupaten.php */
