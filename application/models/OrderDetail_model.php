<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OrderDetail_model extends CI_Model 
{
    public function create ($orderDetail) {
        $this->db->insert('pembelian_produk', $orderDetail);
    }
}