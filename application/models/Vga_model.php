<?php

class Vga_model extends CI_model {
    public function getVga() {
        return $this->db->get_where('produk', ['id_kategori' => 1])->result_array();
        // return $this->db->get('produk')->result_array();
    }
}