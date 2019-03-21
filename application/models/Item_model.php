<?php   


defined('BASEPATH') OR exit('No direct script access allowed');

class Item_model extends CI_Model {

    $query = $this->db->get('produk');
    
    
    $query->result_array();
        
    

}

/* End of file Item_model.php */


?>