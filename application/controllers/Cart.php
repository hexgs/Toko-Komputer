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
        $data['content'] = 'public/cart/index';
        $this->load->view('public/templates/dashboard', $data);
    }

    // public function addCart($id_produk)
    // {
    //     $data['judul'] = 'Toko Komputer';
    //     $data['content'] = 'public/cart/index';
    //     $data['cart'] = $this->Item_model->tampilCart($id_produk);
    //     $this->load->view('public/templates/dashboard', $data);
    // }

    public function addCart($id_produk)
    {
        // $data['judul'] = 'Toko Komputer';
        // $data['content'] = 'public/cart/index';
        $produk = $this->Item_model->tampilCart($id_produk);
        $data = array(
            'id'      => $produk->id_produk,
            'qty'     => 1,
            'price'   => $produk->harga,
            'name'    => $produk->nama_produk
        );
        $this->cart->insert($data);
        $data['judul'] = 'Toko Komputer';
        $data['content'] = 'public/cart/index';
        $this->load->view('public/templates/dashboard', $data);
        // $this->load->view('public/templates/dashboard', $data);
    }

    public function delete($rowid)
    {
        $this->cart->update(array('rowid' => $rowid, 'qty' => 0));
        $data['judul'] = 'Toko Komputer';
        $data['content'] = 'public/cart/index';
        $this->load->view('public/templates/dashboard', $data);
    }

    public function update()
    {
        $i = 1;
        foreach ($this->cart->contents() as $items) {
            $this->cart->update(array('rowid' => $items['rowid'], 'qty' => $_POST['qty' . $i]));
            $i++;
        }
        $data['judul'] = 'Toko Komputer';
        $data['content'] = 'public/cart/index';
        $this->load->view('public/templates/dashboard', $data);
    }
}
