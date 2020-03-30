	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="border">Moderator Control Panel</h1>
            		<a class="btn btn-warning" href="<?php echo base_url('mod/news/add'); ?>" role="button"><span class="fa fa-plus"></span> Tambah Berita</a>
            		<br><br>
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
										printf("<tr><td>%d</td><td>%s</td><td>%s</td><td><a href='mod/news/add/%d' title='Edit'><span class='fa fa-edit'></span></a></td></tr>", $row->id, $row->judul, $row->isi, $row->id);
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>