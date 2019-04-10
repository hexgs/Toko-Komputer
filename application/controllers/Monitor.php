<?php

class Monitor extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        $data['monitor'] = $this->Item_model->getMonitor();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/monitor/index', $data);
        $this->load->view('public/templates/footer');
    }
}