<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Item extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Item_model');
    }


    public function index()
    {
        $data['item'] = $this->Item_model->getAllItem();
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Item';
        $data['content'] = 'admin/item';
        $this->load->view('admin/templates/index', $data);
    }

    public function tambah()
    {
        //$data['item'] = $this->Item_model->getAllItem();
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Item';
        $data['content'] = 'admin/tambah';
        $this->load->view('admin/templates/index', $data);
        if($this->Item_model->tambahData($_POST) > 0){
            // redirect(base_url('admin/item'));
            exit;
        }        
    }

    public function hapus($id_produk)
    {
        $this->Item_model->hapusData($id_produk);
        redirect('admin/item');
    }

    public function detail($id_produk)
    {
        $data['title'] = 'Item - Page';
        $data['judul'] = 'Detail Produk';
        $data['content'] = 'admin/detail';
        $this->load->view('admin/templates/index', $data);
    }

    public function getubah(){
        echo json_encode($this->model('Item_model')->getDataItem($_POST['id_produk']));
    }
}

/* End of file Item.php */
 