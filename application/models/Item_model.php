<?php

class Item_model extends CI_model {
    public function getVga() {
        return $this->db->get_where('produk', ['id_kategori' => 1])->result_array();
        // return $this->db->get('produk')->result_array();
    }

    public function getHardisk() {
        return $this->db->get_where('produk', ['id_kategori' => 2])->result_array();
        // return $this->db->get('produk')->result_array();
    }

    public function getProcessor() {
        return $this->db->get_where('produk', ['id_kategori' => 3])->result_array();
        // return $this->db->get('produk')->result_array();
    }

    public function getMonitor() {
        return $this->db->get_where('produk', ['id_kategori' => 4])->result_array();
        // return $this->db->get('produk')->result_array();
    }

    public function getRam() {
        return $this->db->get_where('produk', ['id_kategori' => 5])->result_array();
        // return $this->db->get('produk')->result_array();
    }

    public function getSSD() {
        return $this->db->get_where('produk', ['id_kategori' => 6])->result_array();
        // return $this->db->get('produk')->result_array();
    }

    public function getMotherboard() {
        return $this->db->get_where('produk', ['id_kategori' => 7])->result_array();
        // return $this->db->get('produk')->result_array();
    }

    public function getCPU() {
        return $this->db->get_where('produk', ['id_kategori' => 8])->result_array();
        // return $this->db->get('produk')->result_array();
    }
}