<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mod extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('sg_model');
		$this->load->model('sg_main');

		if ($this->session->userdata('islogin') != 1) redirect(base_url("signin"));
		if ($this->session->userdata('userlevel') != 2) redirect(base_url("mod"));
	}

	function index()
	{
		$page['title'] = 'Moderator Area';
		$page['desc'] = 'Segimaba Moderator Control Panel';
		$page['data'] = $this->sg_model->GetNewsAll();

		$this->load->view('header', $page);
		$this->load->view('mod');
		$this->load->view('footer');
	}

	function news($param)
	{
		$page['title'] = 'Moderator Area';
		$page['desc'] = 'Segimaba Moderator Control Panel';
		$page['param'] = func_get_args();

		$this->load->view('header', $page);
		$this->load->view('mod/news.'.$param.'.php');
		$this->load->view('footer');
	}

	function news_process()
	{
		$news['judul'] 	= $this->input->post('judul');
		$news['isi'] 	= $this->input->post('isi');

		$this->sg_model->TambahNews($news);
		$this->session->set_flashdata('status', '<p class="status alert alert-success">Berita baru berhasil ditambahkan</p>');

		redirect(base_url('mod'));
	}

	function news_edit($id)
	{
		$news['judul'] 	= $this->input->post('judul');
		$news['isi'] 	= $this->input->post('isi');

		$this->sg_model->UpdateNews($id, $news);
		$this->session->set_flashdata('status', '<p class="status alert alert-success">Berita berhasil diedit</p>');
		
		redirect(base_url('mod'));
	}

	function pengumuman()
	{
		$this->load->view('header');
		$this->load->view('mod/pengumuman');
		$this->load->view('footer');
	}
}