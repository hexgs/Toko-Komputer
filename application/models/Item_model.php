<?php 


defined('BASEPATH') or exit('No direct script access allowed');

class Item_model extends CI_Model
{

    public function getAllItem()
    {

        $query = $this->db->get('produk');

        return $query->result_array();
    }

    public function getDataItem($id)
    {
        // return $this->db->get_where('produk', ['id_produk' => $id])->row_array();
        $this->db->query('SELECT * FROM ' . 'produk' . ' WHERE id_produk=:id');
        $this->db->bind('id_produk', $id);
        return $this->db->single();
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
    
    public function hapusData($id_produk)
    {
        $this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }
}

/* End of file Item_model.php */
 