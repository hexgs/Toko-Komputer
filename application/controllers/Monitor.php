<?php

class Monitor extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Monitor_model');
        // $this->load->model('DetailProduk_model');
    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        $data['monitor'] = $this->Monitor_model->getMonitor();
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/monitor/index', $data);
        $this->load->view('public/templates/footer');
    }

    // public function detail($id_produk) {
    //     $data['detail_produk'] = $this->Monitor_model->getDetailProduk($id_produk);
    //     $this->load->view('public/templates/header', $data);
    //     $this->load->view('public/detailproduk/index', $data);
    //     $this->load->view('public/templates/footer');
    // }
}