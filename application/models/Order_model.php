<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model 
{
    public function create ($order) {
        $this->db->insert('pembelian', $order);
        return $this->db->insert_id();
    }
}