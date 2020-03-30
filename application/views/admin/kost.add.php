	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="border">Tambah Informasi Kost</h1>
					<?php echo $this->session->flashdata('status'); ?>
					<form method="post" action="<?php echo base_url('admin/kost_process'); ?>" enctype="multipart/form-data">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<input name="nama" type="text" required="required" class="form-control" placeholder="Nama Rumah Kost" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="pemilik" type="text" required="required" class="form-control" placeholder="Pemilik" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="harga" type="text" required="required" class="form-control" placeholder="Harga" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="ukuran" type="text" required="required" class="form-control" placeholder="Ukuran (0m x 0m)" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="kamar" type="text" required="required" class="form-control" placeholder="Jumlah Kamar" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="terisi" type="text" required="required" class="form-control" placeholder="Terisi" />
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<input name="rating" type="text" required="required" class="form-control" placeholder="Rating" />
								</div>
							</div>
						</div>
						<div class="form-group">
							<input name="alamat" type="text" required="required" class="form-control" placeholder="Alamat" />
						</div>
						<div class="form-group">
							<input name="fasilitas" type="text" required="required" class="form-control" placeholder="Fasilitas (Pisahkan dengan ,)" />
						</div>
						<label class="red">File yang diijinkan (jpg, png)</label>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Gambar 1</label>
									<input name="gambar-1" type="file" required="required" placeholder="File">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Gambar 2</label>
									<input name="gambar-2" type="file" required="required" placeholder="File">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Gambar 3</label>
									<input name="gambar-3" type="file" required="required" placeholder="File">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Gambar 4</label>
									<input name="gambar-4" type="file" required="required" placeholder="File">
								</div>
							</div>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Tambah Data</button>
						</div>
					</form>
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
	