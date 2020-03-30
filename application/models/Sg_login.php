<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SG_Login extends CI_Model
{
	function Cocokan($username, $password)
	{
		$query = $this->db->get_where('user', array('username' => $username, 'password' => $password));
		if ($query->num_rows() > 0)
		{
			return $query->result();
		}
		else {
			return false;
		}
	}
}