<?php

class Cpu extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        $data['cpu'] = $this->Item_model->getCpu();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/cpu/index', $data);
        $this->load->view('public/templates/footer');
    }
}