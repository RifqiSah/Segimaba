<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SG_Main extends CI_Model
{
	function SeoUrl($string)
	{
	    $string = strtolower($string);
	    $string = preg_replace("/[^a-z0-9_\s-]/", "", $string);
	    $string = preg_replace("/[\s-]+/", " ", $string);
	    $string = preg_replace("/[\s_]/", "-", $string);
	    
	    return $string;
	}

	function UnSeoUrl($string)
	{
		$string = str_replace("-", " ", $string);
		$string = ucwords($string);

		return $string;
	}

    function UploadImage($nama, $param)
	{
		$this->load->library('upload');

		$config['upload_path'] = './cdn/kost/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['file_name'] = $this->SeoUrl($nama) . '-' . $param;

        $this->upload->initialize($config);
        $this->upload->do_upload('gambar-' . $param);
	}
}