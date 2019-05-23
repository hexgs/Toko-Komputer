<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Login Admin';
        $this->load->view('admin/login_form/templates/auth_header', $data);
        $this->load->view('admin/login_form/login');
        $this->load->view('admin/login_form/templates/auth_footer');
    }

    public function registration()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This email has already registered!']);
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[5]', ['min_length' => 'Password too short!']);

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Admin Registration';
            $this->load->view('admin/login_form/templates/auth_header', $data);
            $this->load->view('admin/login_form/registration');
            $this->load->view('admin/login_form/templates/auth_footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'role_id' => 1,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('admin', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Congratulation! Your account has been created. Please Login</div>');
            redirect('admin/login_admin/auth');
        }
    }
}
