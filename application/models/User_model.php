<?php

class User_model extends CI_model {
    public function getAllUser() {
        return $this->db->get('pelanggan')->result_array();
    }
}