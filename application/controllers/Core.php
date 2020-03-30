<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Core extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('sg_login');
		$this->load->model('sg_model');
		$this->load->library('email');
	}

	function send_mail()
	{
		$this->email->to('rifqi_sah@yahoo.com');
		$this->email->from($this->input->post('email'), $this->input->post('name'));
		$this->email->subject("Pesan dari Segimaba");
		$this->email->message($this->input->post('message'));

		$this->email->send();
		$this->session->set_flashdata('status', '<p class="status alert alert-warning">Email sudah kami terima. Terima kasih sudah menggunakan Segimaba!</p>');
		redirect(base_url('contact'));
	}

	function signin()
	{
		$this->load->model('sg_login');

		$aktif 		= -1;
		$username 	= $this->input->post('username');
		$password 	= $this->input->post('password');

		$recaptcha 	= $this->input->post('g-recaptcha-response');
		$response 	= $this->recaptcha->verifyResponse($recaptcha);

		$ret = $this->sg_login->Cocokan($username, md5($password));
		foreach ($ret as $row)
			$aktif = $row->aktif;

		// if (isset($response['success']) and $response['success'] === true)
		// {
			if ($ret && $aktif == 1)
			{
				foreach ($ret as $row) {
					$data_session = array(
						'username' => $username,
						'islogin' => 1,
						'userlevel' => $row->level
					);

					$this->session->set_userdata($data_session);
					redirect(base_url());
				}
			}
			elseif ($aktif == 0) {
				$this->session->set_flashdata('status', '<p class="status alert alert-warning">Anda belum diperbolehkan untuk login.<br>Mohon tunggu Admin melakukan konfirmasi terhadap akun Anda.</p>');
				redirect(base_url('signin'));
			}
			else {
				$this->session->set_flashdata('status', '<p class="status alert alert-danger">Username atau password yang Anda masukan salah!</p>');
				redirect(base_url('signin'));
			}
		// }
		// else {
		// 	$this->session->set_flashdata('status', '<p class="status alert alert-danger">Mohon identifikasikan bahwa Anda bukan robot!</p>');
		// 	redirect(base_url('signin'));
		// }
	}

	function signup()
	{
		if ($this->input->post('pass1') != $this->input->post('pass2'))
			$this->session->set_flashdata('status', '<p class="status alert alert-danger">Password yang Anda masukan tidak sesuai! Mohon coba kembali!</p>');
		else
		{
			$this->load->library('upload');

			$config['file_name'] = $this->input->post('username');

			$config['upload_path'] = './cdn/user/profile/';
	        $config['allowed_types'] = 'jpg';
	        $this->upload->initialize($config);
	        $this->upload->do_upload('foto-profil');

	        $config['upload_path'] = './cdn/user/dokumen/';
	        $config['allowed_types'] = 'pdf';
	        $this->upload->initialize($config);
	        $this->upload->do_upload('dokumen');

			$data['username']	= $this->input->post('username');
			$data['email']		= $this->input->post('email');
			$data['password']	= md5($this->input->post('pass1'));
			$data['fname']		= $this->input->post('fname');
			$data['lname']		= $this->input->post('lname');
			$data['mobile']		= $this->input->post('mobile');
			$data['id_kost']	= -1;
			$data['jurusan']	= $this->input->post('jurusan');
			$data['angkatan']	= $this->input->post('angkatan');
			$data['tanggal']	= date("Y-m-d");
			$data['level']		= 3;

			$this->sg_model->TambahUser($data);
			$this->session->set_flashdata('status', '<p class="status alert alert-success">Akun Anda telah dibuat. Admin akan mengkonfirmasi akun Anda terlebih dahulu</p>');
		}

		redirect(base_url('signup'));
	}
}