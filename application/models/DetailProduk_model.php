<?php

class DetailProduk_model extends CI_model {
    public function getDetailProduk($id) {
        // return $this->db->get_where('produk', ['id_produk' => 3])->row();
        return $this->db->where('id_produk',$id)->get('produk')->row();
        // return $this->db->get('produk')->result_array();
    }
}