<?php

class Checkout extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($id = '')
    {
        $data['judul'] = 'Toko Komputer';
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/cart/checkout');
        $this->load->view('public/templates/footer');
    }
}