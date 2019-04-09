<?php

class DetailProduk_model extends CI_model {
    public function getDetailProduk($id) {
        return $this->db->get_where('produk', ['id_produk', $id])->row();
        // return $this->db->get('produk')->result_array();
    }
}