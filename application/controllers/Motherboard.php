<?php

class Motherboard extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        $data['motherboard'] = $this->Item_model->getMotherboard();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/motherboard/index', $data);
        $this->load->view('public/templates/footer');
    }
}