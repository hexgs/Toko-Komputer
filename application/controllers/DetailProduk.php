<?php

class DetailProduk extends CI_Controller {
    public function __construct() {
        parent::__construct();
        
    }

    public function index($id = '') {
        $data['judul'] = 'Toko Komputer';
        //$data['user'] = $user;
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/home/index');
        $this->load->view('public/templates/footer');
    }
}