<?php

class Daftar extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Signupmodel', 'pelanggan');
	}

	public function index()
	{
		$data['judul'] = 'Toko Komputer';
		//$data['user'] = $user;
		$this->load->view('public/templates/header', $data);
		$this->load->view('public/daftar/index');
		$this->load->view('public/templates/footer');
	}

	public function register()
	{
		$data['judul'] = 'Toko Komputer';
		$this->load->view('public/templates/header', $data);
		$this->load->view('public/daftar/index');
		$this->load->view('public/templates/footer');
	}

	public function actionRegister()
	{
		$this->load->library('form_validation');
		// field name, error message, validation rules
		$this->form_validation->set_rules('nama_pelanggan', 'Nama', 'trim|required|min_length[4]');
		$this->form_validation->set_rules('telepon', 'Nomor Telepon', 'required|regex_match[/^[0-9]{12}$/]');
		$this->form_validation->set_rules('email_pelanggan', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password_pelanggan', 'Password', 'trim|required|min_length[4]|max_length[32]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password_pelanggan]');

		if ($this->form_validation->run() == FALSE) {
			$this->register();
		} else {
			// post values
			$nama_pelanggan = $this->input->post('nama_pelanggan');
			$telepon = $this->input->post('telepon');
			$email_pelanggan = $this->input->post('email_pelanggan');
			$password_pelanggan = $this->input->post('password_pelanggan');
			// set post values
			$this->pelanggan->setNama($nama_pelanggan);
			$this->pelanggan->setTelepon($telepon);
			$this->pelanggan->setEmail($email_pelanggan);
			$this->pelanggan->setPassword(md5($password_pelanggan));
			// $this->user->setStatus(1);
			// insert values in database
			$this->pelanggan->createUser();
			redirect('home');
		}
	}
}
