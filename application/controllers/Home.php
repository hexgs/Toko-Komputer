<?php 

Class Home extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/templates/head');
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/leftbar');
        $this->load->view('admin/templates/contentheader');
        $this->load->view('admin/home/index');
        $this->load->view('admin/templates/footer');
    }

}
