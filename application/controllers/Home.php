<?php

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($id = '')
    {
        $data['judul'] = 'Toko Komputer';
        //$data['user'] = $user;
        $data['produk'] = $this->Item_model->getNewProduct();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/home/index');
        $this->load->view('public/templates/footer');
    }
}
