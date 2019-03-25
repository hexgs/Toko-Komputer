<?php   


defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

    public function getAllItem(){

        $query = $this->db->query('SELECT * FROM produk JOIN kategori_produk ON produk.id_kategori = kategori_produk.id_kategori');
            
        return $query->result_array();

    } 

}

/* End of file Item_model.php */


?>