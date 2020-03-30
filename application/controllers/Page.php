<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('sg_model');
		$this->load->model('sg_main');
	}

	// Page
	function index()
	{
		$data['result_kost_all'] = $this->sg_model->GetKost();
		$data['result_kost_limit'] = $this->sg_model->GetKostLimit();
		$data['result_news'] = $this->sg_model->GetNews();

		$page['title'] = 'Segala Informasi Bagi Mahasiswa Baru';
		$page['desc'] = 'Segala Informasi Bagi Mahasiswa Baru merupakan sebuah website yang menyediakan beberapa layanan khusus untuk Mahasiswa Baru';

		$this->load->view('header', $page);
		$this->load->view('home', $data);
		$this->load->view('footer');
	}

	function contact()
	{
		$page['title'] = 'Kontak Kami';
		$page['desc'] = 'Apakah anda merasa kesulitan? Kami siap membantu Anda';

		$this->load->view('header', $page);
		$this->load->view('contact');
		$this->load->view('footer');
	}

	function about()
	{
		$page['title'] = 'Tentang Kami';
		$page['desc'] = 'Sejarang singkat kami dan orang-orang hebat yang ada didalamnya';

		$this->load->view('header', $page);
		$this->load->view('about');
		$this->load->view('footer');
	}

	function tos()
	{
		$page['title'] = 'Terms of Service';
		$page['desc'] = 'Ketentuan penggunaan layanan Segimaba';

		$this->load->view('header', $page);
		$this->load->view('tos');
		$this->load->view('footer');
	}
}