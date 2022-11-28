<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengguna extends CI_Model {

    private $_table = 'mt_admin';

    // Mengambil data dari database
    public function getPengguna()
    {
        $this->db->select('*');
        $this->db->join('mt_kabupaten', 'mt_kabupaten.id_kabupaten = mt_admin.kabupaten_id');
        $this->db->order_by('id_admin', 'DESC');
        return $this->db->get($this->_table)->result_array();
     }

       // Insert data ke database
	public function entry($data)
	{
		return $this->db->insert($this->_table, $data);
	}

    // Menghapus data dari database
	public function delete()
	{
		$key = $this->uri->segment(2);
		return $this->db->delete($this->_table,['id_admin' => $key]);
	}

    public function countAdmin(){
        $query = $this->db->query("SELECT * FROM mt_admin WHERE level like '%Admin%'");
        $total = $query->num_rows();
        return $total;
    }

    public function countSuper()
	{
		$query = $this->db->query("SELECT * FROM mt_admin WHERE level like '%Super%'");
        $total = $query->num_rows();
        return $total;
	}
}

/* End of file M_pengguna.php */
