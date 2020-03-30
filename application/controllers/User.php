<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');

		$this->load->model('sg_login');
		$this->load->model('sg_model');
	}

	function signin()
	{
		$page['title'] = 'Sign In';
		$page['desc'] = 'Masuk ke akun Segimaba milik Anda';

		$this->load->view('header', $page);
		$this->load->view('signin');
		$this->load->view('footer');
	}

	function signup()
	{
		$args = func_get_args();
		
		$page['title'] = 'Sign Up';
		$page['desc'] = 'Daftarkan diri Anda sekarang juga untuk bergabung bersama member Segimaba lainnya';

		$data['result'] = $this->sg_model->GetKost();

		$this->load->view('header', $page);
		$this->load->view('signup', $data);
		$this->load->view('footer');
	}

	function signout()
	{
		$this->session->sess_destroy();
		redirect(base_url());
	}
}