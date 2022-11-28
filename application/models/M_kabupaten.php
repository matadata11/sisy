<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kabupaten extends CI_Model {

    private $_table = 'mt_kabupaten';

     // Mengambil data dari database
     public function getKabupaten()
     {
        $this->db->select('*');
        $this->db->join('mt_provinsi', 'mt_provinsi.id_provinsi = mt_kabupaten.provinsi_id');
        $this->db->order_by('provinsi_id', 'ASC');
        return $this->db->get($this->_table)->result_array();
     }

      // Insert data ke database
	public function entry($data)
	{
		return $this->db->insert($this->_table, $data);
	}

    // ubah data
    public function update($data, $id_kabupaten){
        $query = $this->db->where('id_kabupaten', $id_kabupaten);
        $query = $this->db->update($this->_table, $data);
        return $query;
    }

    // Menghapus data dari database
	public function delete()
	{
		$key = $this->uri->segment(2);
		return $this->db->delete($this->_table,['id_kabupaten' => $key]);
	}

}

/* End of file M_kabupaten.php */
