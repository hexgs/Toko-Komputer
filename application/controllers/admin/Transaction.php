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

    public function detailTransaksi($id)
    {
        $data['pembelian'] = $this->Admin_model->getTscById($id);
        $data['title'] = 'Transaction - Page';
        $data['judul'] = 'Detail Transaksi';
        $data['content'] = 'admin/detailtransaksi';
        $this->load->view('admin/templates/index', $data);
    }

    public function updateStatusTsc()
    {
        if (isset($_REQUEST['val'])) {
            $this->load->model('Admin_model', 'pembelian');

            $up_stat = $this->pembelian->updateStatusTsc();

            if ($up_stat > 0) {
                $this->session->set_flashdata('msg', 'Transaksi Data Updated Successfully!');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'Transaksi Data not Updated Successfully!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            return redirect('admin/transaction');
        }
    }
}
