<?php

class Cart extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
        $this->load->model('Order_model');
        $this->load->model('OrderDetail_model');
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

    public function checkout() {
        if($this->session->userdata('email_pelanggan') == null) {
            redirect('login/login');
        } else {
            //save new order
            $order = array(
                'id_pelanggan' => $this->session->userdata('id_pelanggan'),
                'id_ongkir' => 1,
                'tanggal_pembelian' => date ('Y-m-d'),
                'total_pembelian' => $this->cart->total()
            );
            $order = $this->Order_model->create($order);

            // save order detail
            // foreach ($this->cart->contents() as $items) {
            //     $orderDetail = array(
            //         'id_pembelian' => $id_pembelian,
            //         'id_produk' => $items['id_produk'],
            //         'jumlah' => $items['qty']
            //     );
            //     $this->OrderDetail_model->create($orderDetail);
            // }

            //remove cart
            $this->cart->destroy();

            $data['judul'] = 'Toko Komputer';
            $this->load->view('public/templates/header', $data);
            $this->load->view('public/cart/checkout');
            $this->load->view('public/templates/footer');
        }
    }

    public function billing(){
        $data['judul'] = 'Toko Komputer';
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/cart/checkout');
        $this->load->view('public/templates/footer');
    }
}
