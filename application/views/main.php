<?php
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css'); ?>">

	<title>Segimaba - Index</title>
</head>
<body>
	<div class="container">
		<!-- List kost -->
		<div class="row text-center">
			<?php
				foreach ($result as $row) {
					$id = $row->id_kost;
					$nama = $row->nama;
					$harga = $row->harga;
					$alamat = $row->lokasi;
					$images = $row->gambar;

					printf("<div class='col-md-3 col-sm-6 list-kost'><div class='thumbnail'><img src='assets/img/kost/%s' alt='Image'><div class='caption'><h3>%s</h3><p>%d</p><p><a class='btn btn-primary' href='pesan/kost/%d'>Pesan</a></p></div></div></div>\n", $images, $nama, $harga, $id);
				}
			?>
		</div>
	</div>
</body>
</html>