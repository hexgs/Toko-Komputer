<?php

class Keyboard extends CI_Controller {
    public function __construct() {
        parent::__construct();

    }

    public function index($user = '') {
        $data['judul'] = 'Toko Komputer';
        //$data['user'] = $user;
        $this->load->view('public/templates/header', $data);
        $this->load->view('public/keyboard/index');
        $this->load->view('public/templates/footer');
    }
}