<?php   


defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

    public function getAllItem(){

        $query = $this->db->get('produk');
            
        return $query->result_array();

    } 

}

/* End of file Item_model.php */


?>