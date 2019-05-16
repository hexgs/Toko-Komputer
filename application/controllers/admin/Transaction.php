<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
        // $this->load->model('Kategori_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['transact'] = $this->Admin_model->getJoinTransaction();
        $data['title'] = 'Transaction - Page';
        $data['judul'] = 'Transaction';
        $data['content'] = 'admin/transaction';
        $this->load->view('admin/templates/index', $data);
    }

    public function deleteItem($id)
    {
        $row = 'User-icon.png';
        @unlink(base_url('assets/img/product/User-icon.png'));
        $this->Admin_model->deleteTsc($id);
        $this->session->set_flashdata('flash', 'Dihapus');
        redirect('admin/transaction');
    }

    public function detailTransaksi()
    {
        $id = $this->uri->segment(4);
        $data['details'] = $this->Admin_model->getTsc($id);
        $data['title'] = 'Transaction - Page';
        $data['judul'] = 'Detail Transaksi';
        $data['content'] = 'admin/detailTransaksi';
        $this->load->view('admin/templates/index', $data);
    }
}
