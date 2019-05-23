<?php

class Report extends CI_Controller
{

    public function index()
    {
        $data['content'] = 'admin/report';
        $data['judul'] = 'Report';
        $data['title'] = 'Report - Page';
        $this->load->view('admin/templates/index', $data);
    }
}
