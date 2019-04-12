<?php   

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        // $this->load->model('Kategori_model');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['users'] = $this->Admin_model->getAll('pelanggan');
        $data['title'] = 'User - Page';
        $data['judul'] = 'User';
        $data['content'] = 'admin/user';
        $this->load->view('admin/templates/index',$data);
    }


}
