<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_provinsi extends CI_Model {

    private $_table = 'mt_provinsi';

    // Mengambil data dari database
    public function getprovinsi()
    {
        $this->db->order_by('id_provinsi', 'ASC');
        return $this->db->get($this->_table)->result_array();
    }

    // add data
    // Insert data ke database
	public function entry($data)
	{
		return $this->db->insert($this->_table, $data);
	}

    // ubah data
    public function update($data, $id_provinsi){
        $query = $this->db->where('id_provinsi', $id_provinsi);
        $query = $this->db->update($this->_table, $data);
        return $query;
    }

    // Menghapus data dari database
	public function delete()
	{
		$key = $this->uri->segment(2);
		return $this->db->delete($this->_table,['id_provinsi' => $key]);
	}

}

/* End of file M_provinsi.php */
