<?php 

Class Home extends CI_Controller {

    public function index()
    {
        $data['content'] = 'admin/dashboard'; 
        $this->load->view('admin/templates/index',$data);
        
    }

}
