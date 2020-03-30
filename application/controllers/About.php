<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
	function __construct()
	{
		parent::__construct();
	}

	function index()
	{
		redirect(base_url('about'));
	}

	function informatika()
	{
		$page['title'] = 'Tentang Informatika';
		$page['desc'] = 'Tentang Teknik Informatika';

		$this->load->view('header', $page);
		$this->load->view('about/informatika');
		$this->load->view('footer');
	}
}