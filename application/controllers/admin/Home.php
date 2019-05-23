<?php 

Class Home extends CI_Controller {

    public function index()
    {
        $this->load->model('Admin_model');
        $data['content'] = 'admin/dashboard';
        $data['judul'] = 'Dashboard';
        $data['title'] = 'Dashboard - Page';
        $this->load->view('admin/templates/index',$data);
        $data['order'] = $this->Admin_model->getCountOrder();
    }

}
