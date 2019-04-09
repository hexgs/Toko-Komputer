<?php

class DetailProduk extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('DetailProduk_model');
    }

    public function index($id_produk) {
        $data['judul'] = 'Toko Komputer';
        $data['detail_produk'] = $this->DetailProduk_model->getDetailProduk($id_produk);
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/detailproduk/index', $data);
        $this->load->view('public/templates/footer');
    }
}