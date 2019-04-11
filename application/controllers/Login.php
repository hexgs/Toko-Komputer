<?php

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Loginmodel', 'pelanggan');
	}

	public function index()
	{
		if ($this->session->userdata('is_authenticated') == FALSE) {
			redirect('login/login');
		} else {
			$data['judul'] = 'Toko Komputer';
			//$data['user'] = $user;
			$this->pelanggan->setUserID($this->session->userdata('id_pelanggan'));
			$data['userInfo'] = $this->pelanggan->getUserInfo();
			$data['content'] = 'public/login/index';
			$this->load->view('public/templates/dashboard', $data);
		}
	}

	public function login()
	{
		$data['judul'] = 'Toko Komputer';
		$data['content'] = 'public/login/index';
		$this->load->view('public/templates/dashboard', $data);
	}

	function doLogin()
	{
		//check form validation
		$this->load->library('form_validation');

		$this->form_validation->set_rules('email_pelanggan', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password_pelanggan', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			$data['judul'] = 'Toko Komputer';
			$data['content'] = 'public/login/index';
			//field validation failed. user redirected to login page
			$this->load->view('public/templates/dashboard', $data);
		} else {
			$sessArray = array();
			//field validation succeeded. validate against database
			$email_pelanggan = $this->input->post('email_pelanggan');
			$password_pelanggan = $this->input->post('password_pelanggan');

			$this->pelanggan->setEmail($email_pelanggan);
			$this->pelanggan->setPassword(md5($password_pelanggan));
			//query database
			$result = $this->pelanggan->login();

			if ($result) {
				foreach ($result as $row) {
					$sessArray = array(
						'id_pelanggan' => $row->id_pelanggan,
						'nama_pelanggan' => $row->nama_pelanggan,
						'email_pelanggan' => $row->email_pelanggan,
						'telepon' => $row->telepon,
						'is_authenticated' => TRUE,
					);
					$this->session->set_userdata($sessArray);
				}
				redirect('home');
			} else {
				redirect('login/login?msg=1');
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('id_pelanggan');
		$this->session->unset_userdata('nama_pelanggan');
		$this->session->unset_userdata('email_pelanggan');
		$this->session->unset_userdata('telepon');
		$this->session->unset_userdata('is_authenticated');
		$this->session->sess_destroy();
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		redirect('login');
	}
}
