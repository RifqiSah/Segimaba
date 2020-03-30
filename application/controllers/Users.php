<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('sg_model');
		$this->load->model('sg_main');
		
		if ($this->session->userdata('islogin') != 1) redirect(base_url("signin"));
		if ($this->session->userdata('userlevel') != 3) redirect(base_url(""));
	}

	function index()
	{
		$data = $this->sg_model->GetUserId2($this->session->userdata('username'));
		foreach ($data as $row)
			if ($row->id_kost != -1)
				$data = $this->sg_model->GetUserId($this->session->userdata('username'));

		$page['title'] = 'User Area';
		$page['desc'] = 'Segimaba User Control Panel';
		$page['data'] = $data;

		$this->load->view('header', $page);
		$this->load->view('user', $page);
		$this->load->view('footer');
	}

	function kost($param)
	{
		$data = $this->sg_model->GetUserId2($this->session->userdata('username'));
		foreach ($this->sg_model->GetUserId2($this->session->userdata('username')) as $row)
			if ($row->id_kost != -1)
				redirect(base_url('users'));

		$page['title'] = 'User Area';
		$page['desc'] = 'Segimaba User Control Panel';
		$page['data'] = $this->sg_model->GetKostId($this->sg_main->UnSeoUrl($param));

		$this->load->view('header', $page);
		$this->load->view('user/kost', $page);
		$this->load->view('footer');
	}

	function simpan($param)
	{
		$uname = $this->session->userdata('username');
		$idnya = -1;
		$data = $this->sg_model->GetKostId($this->sg_main->UnSeoUrl($param));
		
		foreach ($data as $row) {
			$idnya = $row->id_kost;
		}

		$this->sg_model->UpdateUserKost($uname, $idnya);
		redirect(base_url('users'));
	}

	function checkout()
	{
		$page['title'] = 'Checkout';
		$page['desc'] = 'Daftar pesanan serta tagihan Anda';
		$page['data'] = $this->sg_model->GetUserId($this->session->userdata('username'));

		$this->load->view('header', $page);
		$this->load->view('user/checkout', $page);
		$this->load->view('footer');
	}
 }