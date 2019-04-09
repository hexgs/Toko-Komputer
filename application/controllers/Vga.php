<?php

class Vga extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        $data['vga'] = $this->Item_model->getVga();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/vga/index', $data);
        $this->load->view('public/templates/footer');
    }
}