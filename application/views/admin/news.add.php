	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="border">Editor Berita</h1>
					<?php echo $this->session->flashdata('status'); ?>
					<?php
						$id = 0;
						$judul = '';
						$isi = '';

						if (count($param) > 1)
						{
							$id = $param[1];

							$data = $this->sg_model->GetNewsId($id);
							foreach ($data as $row)
							{
								$judul = $row->judul;
								$isi = $row->isi;
							}
						}
					?>
					<form method="post" action="<?php echo base_url((count($param) > 1 ? 'admin/news_edit/' . $id : 'admin/news_process')); ?>">
						<div class="form-group">
							<label>Judul</label>
							<input type="text" name="judul" required="required" class="form-control" value="<?php echo $judul; ?>">
						</div>
						<div class="form-group">
							<label>Isi Berita</label>
							<textarea rows="15" name="isi" required="required" class="form-control ckeditor" placeholder="Isi Beritanya"><?php echo $isi; ?></textarea>
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
	