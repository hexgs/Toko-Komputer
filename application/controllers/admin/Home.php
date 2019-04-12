<?php 

Class Home extends CI_Controller {

    public function index()
    {
        $data['content'] = 'admin/dashboard';
        $data['judul'] = 'Dashboard';
        $data['title'] = 'Dashboard - Page';
        $this->load->view('admin/templates/index',$data);
        
    }

}
