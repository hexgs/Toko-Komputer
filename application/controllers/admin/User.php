<?php   

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index()
    {
        $data['judul'] = 'User - Page';
        $data['title'] = 'User - Page';
        $data['user'] = $this->User_model->getAllUser();
        $data['content'] = 'admin/user';
        $this->load->view('admin/templates/index',$data);
        
    }

}

/* End of file User.php */

?>