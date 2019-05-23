<?php

class Processor extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        $data['processor'] = $this->Item_model->getProcessor();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/processor/index', $data);
        $this->load->view('public/templates/footer');
    }
}