<?php

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    public function index()
    {
        $data['pembelian'] = $this->Admin_model->getCountOrder();
        $data['pelanggan'] = $this->Admin_model->getCountUser();
        $data['content'] = 'admin/dashboard';
        $data['judul'] = 'Dashboard';
        $data['title'] = 'Dashboard - Page';
        $this->load->view('admin/templates/index', $data);
    }
}
