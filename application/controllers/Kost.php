<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kost extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('sg_model');
		$this->load->model('sg_main');
	}

	function index()
	{
		$page['title'] 	= 'Rumah Kost';
		$page['desc'] 	= 'Detail informasi mengenai rumah kost yang ada pada Segimaba';
		$page['data'] 	= $this->sg_model->GetKost();

		$this->load->view('header', $page);
		$this->load->view('kost', $page);
		$this->load->view('footer');
	}

	function detail()
	{
		$args = func_get_args();
		if (count($args) == 0)
			redirect(base_url('kost'));

		$datanya = $this->sg_model->GetKostId(ucwords(str_replace("-", " ", $args[0])));
		if (!$datanya) redirect(base_url('kost'));

		foreach ($datanya as $row)
		{
			$page['title'] 	= 'Detail ' . $row->nama;
			$page['desc'] 	= 'Detail informasi mengenai rumah kost yang ada pada Segimaba';
			$page['data'] 	= $datanya;

			$this->load->view('header', $page);
			$this->load->view('kost', $page);
			$this->load->view('footer');
		}
	}
 }