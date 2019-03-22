<?php 


defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_Model
{

    public function getAllItem()
    {

        $query = $this->db->get('produk');

        return $query->result_array();
    }

    public function tambahData()
    { 
        $data = [
            "id_kategori" => $this->input->post('id_kategori'),
            "nama_produk" => $this->input->post('nama_produk'),
            "harga" => $this->input->post('harga'),
            "stok" => $this->input->post('stok'),
            "berat" => $this->input->post('berat'),
            "foto" => $this->input->post('foto'),
            "deskripsi" => $this->input->post('deskripsi')
        ];

        $this->db->insert('produk', $data);
        redirect('admin/item');
    }

    public function hapusData($id)
    {
        return $this->db->delete($this->_table, array("id_produk" => $id));
    }
}

/* End of file Item_model.php */
 