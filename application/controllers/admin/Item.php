<?php   

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        
    }
    

    public function index()
    {
        $data['item'] = $this->Item_model->getAllItem();
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Item';
        $data['content'] = 'admin/item';
        $this->load->view('admin/templates/index',$data);
        
    }

}

/* End of file Item.php */

?>

