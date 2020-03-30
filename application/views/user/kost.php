	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12 margin-bottom-50">
					<h1 class="border">Apakah Anda yakin?</h1>
					<p>Ini merupakan rumah kost yang Anda inginkan!</p>
					<?php foreach ($data as $row) { ?>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>#</th>
									<th>Produk</th>
									<th>Detail Pesanan</th>
									<th>Qty</th>
									<th>Harga</th>
								</tr>
							</thead>
							<tbody>
								<?php
									printf("<tr><td>1</td><td>Rumah Kost</td><td>%s</td><td>1</td><td>IDR %s</td></tr>", $row->nama, number_format($row->harga));
								?>
							</tbody>
						</table>
					</div>
					<?php } ?>
					<p class="status alert alert-danger">Setelah Anda menekan tombol "Simpan Data", makan rumah kost yang Anda pilih tersebut sudah <b>100% Anda inginkan</b>.</p>
					<a class="btn btn-warning" href="<?php echo base_url('kost'); ?>" title="Kembali"><span class="fa fa-arrow-left"></span> Kembali</a>
					<a class="btn btn-primary pull-right" href="<?php echo base_url('users/simpan/' . $this->sg_main->SeoUrl($row->nama)); ?>">Simpan Data</a>
				</div>
			</div>
		</div>
	</div>