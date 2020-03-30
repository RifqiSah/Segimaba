	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="border">Detail Informasi User</h1>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>Username</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Jurusan</th>
									<th>Tanggal Pesan</th>
									<th>Sisa Hari</th>
									<th>Bayar</th>
									<th>Status</th>
									<th>ID Kost</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ($data as $row)
									{
										$tgl = date('Y-m-d', strtotime('+12 month', strtotime($row->tanggal)));
										$sisa = round((abs(strtotime(date("Y-m-d")) - strtotime($tgl)))/(60*60*24));
											
										if ($sisa <= 31)
											$bg = "<tr class='back-merah'>";
										else
											$bg = "<tr>";

										if ($row->bayar == 1)
											$status_bayar = "<span class='blok blok-hijau'>Sudah</span>";
										else
											$status_bayar = "<a href='statususer/".$row->username."/bayar'><span class='blok blok-merah'>Belum</span></a>";

										if ($row->aktif == 1)
											$status_user = "<span class='blok blok-hijau'>Aktif</span>";
										elseif ($row->aktif == 2)
											$status_user = "<a href='statususer/".$row->username."/aktif'><span class='blok blok-kuning'>Pending</span></a>";
										else
											$status_user = "<a href='statususer/".$row->username."/aktif'><span class='blok blok-merah'>Tidak</span></a>";

										if (strcmp($row->jurusan, 'TIF') == 0)
											$warna = "blok blok-biru";
										elseif (strcmp($row->jurusan, 'TE') == 0)
											$warna = "blok blok-hijau-tua";
										elseif (strcmp($row->jurusan, 'TS') == 0)
											$warna = "blok blok-coklat";
										elseif (strcmp($row->jurusan, 'TG') == 0)
											$warna = "blok blok-orange";
										elseif (strcmp($row->jurusan, 'TIN') == 0)
											$warna = "blok blok-abu-abu";
										else
											$warna = "";

										printf("%s<td><span title='%s %s'>%s</span></td><td>%s</td><td>%s</td><td><span class='%s'>%s %s</span></td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%d</td><td><a href='statususer/%s/hapus' title='Hapus Data'><span class='fa fa-trash'></span></a></td>", $bg, $row->fname,$row->lname, $row->username, $row->email, $row->mobile, $warna, $row->jurusan, $row->angkatan, $row->tanggal, $sisa, $status_bayar, $status_user, $row->id_kost, $row->username);
														}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-md-12">
					<a class="btn btn-warning" href="<?php echo base_url('admin'); ?>" title="Admin Area"><span class="fa fa-arrow-left"></span> Kembali</a>
				</div>
			</div>
		</div>
	</div>
