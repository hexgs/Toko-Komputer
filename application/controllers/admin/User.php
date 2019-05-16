<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
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
        $data['users'] = $this->Admin_model->getAll('pelanggan');
        $data['title'] = 'User - Page';
        $data['judul'] = 'User';
        $data['content'] = 'admin/user';
        $this->load->view('admin/templates/index', $data);
    }

    public function updateStatus()
    {
        if (isset($_REQUEST['val'])) {
            $this->load->model('Admin_model', 'pelanggan');

            $up_stat = $this->pelanggan->updateStatus();

            if ($up_stat > 0) {
                $this->session->set_flashdata('msg', 'User Data Updated Successfully!');
                $this->session->set_flashdata('msg_class', 'alert-success');
            } else {
                $this->session->set_flashdata('msg', 'User Data not Updated Successfully!');
                $this->session->set_flashdata('msg_class', 'alert-danger');
            }
            return redirect('admin/user');
        }
    }
}
