<?php

class Ssd extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        $data['ssd'] = $this->Item_model->getSSD();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/ssd/index', $data);
        $this->load->view('public/templates/footer');
    }
}