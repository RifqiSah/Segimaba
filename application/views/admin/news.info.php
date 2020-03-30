	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="border">Daftar Berita</h1>
					<?php echo $this->session->flashdata('status'); ?>
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead>
								<tr>
									<th>ID</th>
									<th>Judul</th>
									<th>Isi</th>
									<th>#</th>
								</tr>
							</thead>
							<tbody>
								<?php
									foreach ($data as $row)
										printf("<tr><td>%d</td><td>%s</td><td>%s</td><td><a href='add/%d' title='Edit'><span class='fa fa-edit'></span></a></td></tr>", $row->id, $row->judul, $row->isi, $row->id);
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
	