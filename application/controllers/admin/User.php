<?php   

defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

    public function index()
    {
        $data['judul'] = 'User - Page';
        $data['content'] = 'admin/user';
        $this->load->view('admin/templates/index',$data);
        
    }

}

/* End of file Item.php */

?>