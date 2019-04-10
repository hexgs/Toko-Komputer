<?php

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }

    public function index()
    {
        // $data['judul'] = 'Toko Komputer';
        // $data['detail_produk'] = $this->DetailProduk_model->getDetailProduk($id_produk);
        // $this->load->view('public/templates/header', $data);
        // $this->load->view('public/detailproduk/index', $data);
        // $this->load->view('public/templates/footer');
        $data['judul'] = 'Toko Komputer';
        $this->load->view('public/templates/dashboard', $data);
    }

    public function cart($id_produk)
    {
        $data['judul'] = 'Toko Komputer';
        $data['content'] = 'public/cart/index';
        $data['cart'] = $this->Item_model->tampilCart($id_produk);
        $this->load->view('public/templates/dashboard', $data);
    }
}
