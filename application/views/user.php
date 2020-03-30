	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<?php foreach ($data as $row) { ?>
				<div class="col-md-12">
					<h1 class="border">User Panel Anda, <?php echo $row->fname; ?>!</h1>
					<p>Informasi data diri dan pesanan Rumah Kost Anda</p>
					<div class="col-md-2">
						<img src="<?php printf("%s/%s.jpg", base_url('cdn/user/profile'), $row->username); ?>" alt="Profil Photo" class="img-thumbnail img-profil center-block" /><br>
					</div>
					<div class="col-md-10">
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>Details</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>Username</td><td><?php echo $row->username ?></td></tr>
									<tr><td>Email</td><td><?php echo $row->email ?></td></tr>
									<tr><td>Mobile Number</td><td><?php echo $row->mobile ?></td></tr>
									<tr><td>Jurusan</td><td><?php echo $row->jurusan ?></td></tr>
									<tr><td>Angkatan</td><td><?php echo $row->angkatan ?></td></tr>
									<tr><td>Tanggal Mendaftar</td><td><?php echo $row->tanggal ?></td></tr>
									<?php if ($row->id_kost == -1) : ?>
										<tr><td>Rumah Kost Anda</td><td><span class="blok blok-merah">Belum Memesan</span></td></tr>
									<?php else : ?>
										<?php
											$tgl = date('Y-m-d', strtotime('+12 month', strtotime($row->tanggal)));
											$sisa = round((abs(strtotime(date("Y-m-d")) - strtotime($tgl)))/(60*60*24));

											printf("<tr><td>Sisa Hari</td><td>%d</td></tr>", $sisa);
										?>
										<tr><td>Rumah Kost Anda</td><td><?php printf("%s <em><a href='%s' title='Informasi Kost' target='_blank'>(Lihat Rumah kost Anda)</em></a>", $row->nama, base_url('kost') . '/' . $this->sg_main->SeoUrl($row->nama)) ?></td></tr>
									<?php endif; ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
				<div class="col-md-12">
					<p>Status pemesanan</p>
					<?php if ($row->id_kost == -1) : ?>
						<p class="status alert alert-warning">Anda Belum Memesan Rumah Kost. <a href="<?php echo base_url("kost"); ?>">Pesan Sekarang</a>!</p>
					<?php else : ?>
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>Produk</th>
										<th>Detail Pesanan</th>
										<th>Qty</th>
										<th>Harga</th>
										<th>Status Pembayaran</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if ($row->bayar == 1)
											$status_bayar = "<span class='blok blok-hijau'>Lunas</span>";
										else
											$status_bayar = "<a href='" . base_url('users/checkout') . "'><span class='blok blok-merah'>Belum</span></a>";

										printf("<tr><td>1</td><td>Rumah Kost</td><td>%s</td><td>1</td><td>IDR %s</td><td>%s</td></tr>", $row->nama, number_format($row->harga), $status_bayar);
									?>
								</tbody>
							</table>
						</div>
					<?php endif; ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>