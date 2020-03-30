	<div class="g-pb-100">
		<div class="container content">
			<div class="row">
				<?php foreach($data as $row) { ?>
				<div class="col-md-12">
					<div class="row invoice-header">
						<div class="col-xs-12">
							<h1>Keranjang Belanja Anda</h1>
							<p class="status alert alert-danger">Harap segera lakukan pembayaran paling lambat 1 x 24 Jam setelah Anda memesan. Selebihnya dari itu, kami anggap Anda tidak memesan dan semua data Segimaba Anda akan kami hapus.</p>
						</div>
					</div>
					<div class="row invoice-info">
						<div class="col-xs-6">
							<div class="tag-box tag-box-v3">
								<h2>Informasi klien:</h2>
								<ul class="list-unstyled">
									<li><strong>First Name:</strong> <?php echo strtoupper($row->fname); ?></li>
									<li><strong>Last Name:</strong> <?php echo strtoupper($row->lname); ?></li>
									<li><strong>Email:</strong> <?php echo strtoupper($row->email); ?></li>
								</ul>
							</div>
						</div>
						<div class="col-xs-6">
							<div class="tag-box tag-box-v3">
								<h2>Transfer ke:</h2>
								<ul class="list-unstyled">
									<li><strong>Account Name:</strong> M. Rifqi Saiful Ammar Haikal</li>
									<li><strong>Account Number:</strong> 1234567890</li>
									<li><strong>Bank Name:</strong> BNI</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="panel panel-default margin-bottom-40">
					    <div class="panel-heading">
					    	<h3 class="panel-title">Detail Pesanan</h3>
					    </div>
					    <div class="panel-body">
					    	<p>Dibawah ini merupakan layanan dari kami yang Anda pesan. Setelah Anda melakukan pembayaran, Anda telah kami anggap menyetujui <a href="<?php echo base_url('tos'); ?>" title="Ketentuan Layanan" target="_blank">Ketentuan Layanan</a> yang telah kami buat.</p>
					    </div>
					    <div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th>#</th>
										<th>Produk</th>
										<th>Detail Pesanan</th>
										<th>Qty</th>
										<th>Harga</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
										if ($row->bayar == 1)
											$status_bayar = "<span class='blok blok-hijau'>Lunas</span>";
										else
											$status_bayar = "<span class='blok blok-merah'>Belum</span>";

										printf("<tr><td>1</td><td>Rumah Kost</td><td>%s</td><td>1</td><td>IDR %s</td><td>%s</td></tr>", $row->nama, number_format($row->harga), $status_bayar);
									?>
								</tbody>
							</table>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-6">
							<div class="tag-box tag-box-v3 no-margin-bottom">
								<address class="no-margin-bottom">
									Ds. Blater RT 00/00 No. 00, Kalimanah, Purbalingga <br>
									Jawa Tengah, ID <br>
									Mobile: +62 896 7266 3612 <br>
									Email: <a href="mailto:info@segimaba.com">info@segimaba.com</a>
								</address>
							</div>
						</div>
						<div class="col-xs-6 text-right">
							<ul class="list-unstyled invoice-total-info">
								<li><strong>Total:</strong> IDR <?php echo number_format($row->harga); ?></li>
							</ul>
							<button class="btn-u sm-margin-bottom-10" onclick="javascript:window.print();"><i class="fa fa-print"></i> Print</button>
							<button class="btn-u">Submit The Invoice</button>
						</div>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
