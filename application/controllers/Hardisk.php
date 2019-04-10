<?php

class Hardisk extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        $data['hardisk'] = $this->Item_model->getHardisk();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/hardisk/index', $data);
        $this->load->view('public/templates/footer');
    }
}