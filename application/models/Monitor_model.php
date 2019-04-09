<?php

class Monitor_model extends CI_model {
    public function getMonitor() {
        return $this->db->get_where('produk', ['id_kategori' => 3])->result_array();
        // return $this->db->get('produk')->result_array();
    }

    // public function getDetailProduk($id) {
    //     return $this->db->get_where('produk', ['id_produk', $id])->row();
    //     // return $this->db->get('produk')->result_array();
    // }
}