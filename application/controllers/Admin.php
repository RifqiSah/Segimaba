<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->model('sg_model');
		$this->load->model('sg_main');

		if ($this->session->userdata('islogin') != 1) redirect(base_url("signin"));
		if ($this->session->userdata('userlevel') != 1) redirect(base_url(""));
	}
 
	function index()
	{
		$page['title'] 		= 'Admin Dashboard';
		$page['desc'] 		= 'Segimaba Admin Control Panel';

		$data['nkost'] 		= $this->sg_model->GetJumlahKost();
		$data['nuser'] 		= $this->sg_model->GetJumlahUser('');
		$data['nbayar'] 	= $this->sg_model->GetJumlahUser('bayar');
		$data['npindah'] 	= $this->sg_model->GetJumlahUser('pindah');
		$data['details']	= $this->sg_model->GetUserId2($this->session->userdata('username'));

		// $this->load->view('header', $page);
		// $this->load->view('admin', $data);
		// $this->load->view('footer');

		$this->load->view('dashboard/header', $page);
		$this->load->view('dashboard/sidebar', $data);
		$this->load->view('dashboard/main');
		$this->load->view('dashboard/footer');
	}

	function kost($param)
	{
		$page['title'] 	= 'Admin Dashboard';
		$page['desc'] 	= 'Segimaba Admin Control Panel';
		$page['data'] 	= $this->sg_model->GetKost();

		$this->load->view('header', $page);
		$this->load->view('admin/kost.' . $param. '.php', $page);
		$this->load->view('footer');
	}

	function kost_process()
	{
		// Image
		$this->sg_main->UploadImage($this->input->post('nama'), '1');
		$this->sg_main->UploadImage($this->input->post('nama'), '2');
		$this->sg_main->UploadImage($this->input->post('nama'), '3');
		$this->sg_main->UploadImage($this->input->post('nama'), '4');

        // Detail
        $kost['nama'] 		= $this->input->post('nama');
		$kost['pemilik'] 	= $this->input->post('pemilik');
		$kost['harga'] 		= $this->input->post('harga');
		$kost['kamar'] 		= $this->input->post('kamar');
		$kost['ukuran'] 	= $this->input->post('ukuran');
		$kost['rating'] 	= $this->input->post('rating');
		$kost['lokasi'] 	= $this->input->post('alamat');
		$kost['fasilitas'] 	= $this->input->post('fasilitas');

		$this->sg_model->TambahKost($kost);
		$this->session->set_flashdata('status', '<p class="status alert alert-success">Rumah kost baru telah ditambahkan</p>');

		redirect(base_url('admin/kost/add'));
	}

	function user()
	{
		$page['title'] 	= 'Admin Dashboard';
		$page['desc'] 	= 'Segimaba Admin Control Panel';
		$page['data'] 	= $this->sg_model->GetUser3(3);

		$this->load->view('header', $page);
		$this->load->view('admin/user.info.php', $page);
		$this->load->view('footer');
	}

	function tambahuser()
	{
		$page['title'] 	= 'Admin Dashboard';
		$page['desc'] 	= 'Segimaba Admin Control Panel';
		// $page['data'] = $this->sg_model->GetUser3(3);

		$this->load->view('header', $page);
		$this->load->view('admin/user.add.php');
		$this->load->view('footer');
	}

	function news($param)
	{
		$page['title'] 	= 'Admin Dashboard';
		$page['desc'] 	= 'Segimaba Admin Control Panel';
		$page['data'] 	= $this->sg_model->GetNewsAll();
		$page['param'] 	= func_get_args();

		$this->load->view('header', $page);
		$this->load->view('admin/news.' . $param. '.php');
		$this->load->view('footer');
	}

	function news_process()
	{
		$news['judul'] 	= $this->input->post('judul');
		$news['isi'] 	= $this->input->post('isi');

		$this->sg_model->TambahNews($news);
		$this->session->set_flashdata('status', '<p class="status alert alert-success">Berita baru berhasil ditambahkan</p>');

		redirect(base_url('admin/news/add'));
	}

	function news_edit($id)
	{
		$news['judul'] 	= $this->input->post('judul');
		$news['isi'] 	= $this->input->post('isi');

		$this->sg_model->UpdateNews($id, $news);
		$this->session->set_flashdata('status', '<p class="status alert alert-success">Berita berhasil diedit</p>');
		
		redirect(base_url('admin/news/add'));
	}

	function statususer($id, $status)
	{
		if ($status == 'aktif') $this->db->where('username', $id)->update('user', array('aktif' => 1));
		elseif ($status == 'bayar') $this->db->where('username', $id)->update('user', array('bayar' => 1));
		elseif ($status == 'hapus') $this->db->where('username', $id)->delete('user');

		redirect(base_url('admin/user'));
	}
}