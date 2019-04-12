<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        // $this->load->model('Kategori_model');
        $this->load->library('form_validation');
        
    }

    public function index()
    {
        $data['transact'] = $this->Admin_model->getJoinTransaction();
        $data['title'] = 'Transaction - Page';
        $data['judul'] = 'Transaction';
        $data['content'] = 'admin/transaction';
        $this->load->view('admin/templates/index',$data);
    }

}

?>