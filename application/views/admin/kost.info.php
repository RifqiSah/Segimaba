	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="border">Detail Informasi Kost</h1>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nama Rumah Kost</th>
									<th>Alamat</th>
									<th>Pemilik</th>
									<th>Harga</th>
									<th>Kamar</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ($data as $row)
										printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td><td>Rp. %d</td><td>%d</td></tr>", $row->id_kost, $row->nama, $row->lokasi, $row->pemilik, $row->harga, $row->kamar);
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
