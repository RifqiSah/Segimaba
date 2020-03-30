<?php
	function format_status($param)
	{
		if ($param = 0)
			return "Belum";
		elseif ($param = 1)
			return "Aktif";
	}
	
	function format_bayar($param)
	{
		if ($param = 0)
			return "Belum Dibayar";
		elseif ($param = 1)
			return "Lunas";
	}