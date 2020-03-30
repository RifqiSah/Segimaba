<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sg_404 extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		$this->output->set_status_header('404');

		$page['title'] 	= '404';
		$page['desc'] 	= 'Halaman tidak ditemukan!';

		$this->load->view('header', $page);
		$this->load->view('404');
		$this->load->view('footer');
	}
}