<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SG_Model extends CI_Model
{
	// Add data -------------------
	
	function TambahUser($array)
	{
		$this->db->insert('user', $array);
	}

	function TambahKost($array)
	{
		$this->db->insert('kost', $array);
	}

	function TambahNews($array)
	{
		$this->db->insert('news', $array);
	}

	function UpdateUserKost($username, $id_kost)
	{
		$this->db->where('username', $username);
		$this->db->update('user', array('id_kost' => $id_kost, 'tanggal' => date("Y-m-d")));
	}

	function UpdateNews($id, $array)
	{
		$this->db->where('id', $id);
		$this->db->update('news', $array);
	}

	// Get data -------------------
	
	// User
	function GetUser() {
		$query = $this->db->get('user');
		return $query->result();
	}

	function GetUser2() {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('kost', 'user.id_kost = kost.id_kost');

		$query = $this->db->get();
		return $query->result();
	}

	function GetUser3($level) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('level',$level);

		$query = $this->db->get();
		return $query->result();
	}

	function GetUserId($username) {
		$this->db->select('*')->from('user')->join('kost', 'user.id_kost = kost.id_kost')->where('username', $username);

		$query = $this->db->get();
		return $query->result();
	}

	function GetUserId2($username) {
		$this->db->select('*')->from('user')->where('username', $username);

		$query = $this->db->get();
		return $query->result();
	}

	function GetJumlahUser($id) {
		if ($id == 'bayar')
			$query = $this->db->select('*')->from('user')->where(array('bayar' => 0));
		elseif ($id == 'pindah')
			$query = $this->db->select('*')->from('user')->where(array('aktif' => 2));
		else
			$query = $this->db->select('*')->from('user')->where(array('level' => 3));

		return $query->get()->num_rows();
	}

	// Kost
	function GetKost() {
		$query = $this->db->get('kost');
		return $query->result();
	}

	function GetKostLimit() {
		$this->db->select('*')->from('kost')->order_by('RAND()')->limit(3);

		$query = $this->db->get();
		return $query->result();
	}

	function GetKostId($nama) {
		$this->db->select('*')->from('kost')->where('nama', $nama);

		$query = $this->db->get();
		return $query->result();
	}

	function GetJumlahKost() {
		$query = $this->db->get('kost');
		return $query->num_rows();
	}

	function GetKostIsi($nama)
	{
		$this->db->select('*')->from('user')->join('kost', 'user.id_kost = kost.id_kost')->where('kost.nama', $nama);
		
		$query = $this->db->get();
		return $query->num_rows();
	}

	// Berita
	function GetNews() {
		$this->db->select('*')->from('news')->order_by('id', 'DESC');
		$this->db->limit(3);

		$query = $this->db->get();
		return $query->result();
	}

	function GetNewsAll() {
		$query = $this->db->get('news');
		return $query->result();
	}

	function GetNewsId($id) {
		$this->db->select('*')->from('news')->where('id', $id);

		$query = $this->db->get();
		return $query->result();
	}
}