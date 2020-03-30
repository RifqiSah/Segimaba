	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<?php foreach ($data as $row) { ?>
				<div class="col-md-12 margin-bottom-50">
					<h1 class="border"><?php echo $row->nama; ?></h1>
					<p><?php echo $row->lokasi; ?></p>
					<div class="col-sm-6">
				        <div id="carousel-<?php echo $this->sg_main->SeoUrl($row->nama); ?>" class="carousel slide" data-ride="carousel">
				            <div class="carousel-inner">
				                <div class="item active">
				                    <img src="<?php printf("%s/%s.jpg", base_url('cdn/kost'), $this->sg_main->SeoUrl($row->nama) . '-1'); ?>" alt="Photo" class="img-thumbnail center-block" />
				                </div>
				                <div class="item">
				                    <img src="<?php printf("%s/%s.jpg", base_url('cdn/kost'), $this->sg_main->SeoUrl($row->nama) . '-2'); ?>" alt="Photo" class="img-thumbnail center-block" />
				                </div>
				                <div class="item">
				                    <img src="<?php printf("%s/%s.jpg", base_url('cdn/kost'), $this->sg_main->SeoUrl($row->nama) . '-3'); ?>" alt="Photo" class="img-thumbnail center-block" />
				                </div>
				                <div class="item">
				                    <img src="<?php printf("%s/%s.jpg", base_url('cdn/kost'), $this->sg_main->SeoUrl($row->nama) . '-4'); ?>" alt="Photo" class="img-thumbnail center-block" />
				                </div>
				            </div>
				        </div> 
					    <div class="clearfix">
					        <div id="thumbcarousel-<?php echo $this->sg_main->SeoUrl($row->nama); ?>" class="carousel slide" data-interval="false">
					            <div class="carousel-inner">
					                <div class="item active">
					                    <div data-target="#carousel-<?php echo $this->sg_main->SeoUrl($row->nama); ?>" data-slide-to="0" class="thumb">
					                    	<img src="<?php printf("%s/%s.jpg", base_url('cdn/kost'), $this->sg_main->SeoUrl($row->nama) . '-1'); ?>" alt="Photo" class="img-thumbnail center-block" />
					                    </div>
					                    <div data-target="#carousel-<?php echo $this->sg_main->SeoUrl($row->nama); ?>" data-slide-to="1" class="thumb">
					                    	<img src="<?php printf("%s/%s.jpg", base_url('cdn/kost'), $this->sg_main->SeoUrl($row->nama) . '-2'); ?>" alt="Photo" class="img-thumbnail center-block" />
					                    </div>
					                    <div data-target="#carousel-<?php echo $this->sg_main->SeoUrl($row->nama); ?>" data-slide-to="2" class="thumb">
					                    	<img src="<?php printf("%s/%s.jpg", base_url('cdn/kost'), $this->sg_main->SeoUrl($row->nama) . '-3'); ?>" alt="Photo" class="img-thumbnail center-block" />
					                    </div>
					                    <div data-target="#carousel-<?php echo $this->sg_main->SeoUrl($row->nama); ?>" data-slide-to="3" class="thumb">
					                    	<img src="<?php printf("%s/%s.jpg", base_url('cdn/kost'), $this->sg_main->SeoUrl($row->nama) . '-4'); ?>" alt="Photo" class="img-thumbnail center-block" />
					                    </div>
					                </div>
					            </div>
					        </div>
					    </div>
					</div>
					<div class="col-md-6">
						<div class="table-responsive">
							<table class="table">
								<thead>
									<tr>
										<th style="width: 150px;">#</th>
										<th>Detail</th>
									</tr>
								</thead>
								<tbody>
									<tr><td>Pemilik</td><td><?php echo $row->pemilik; ?></td></tr>
									<tr><td>Alamat</td><td><?php echo $row->lokasi; ?></td></tr>
									<tr><td>Harga</td><td>IDR <?php echo number_format($row->harga); ?></td></tr>
									<tr><td>Ukuran (PxL)</td><td><?php echo $row->ukuran; ?></td></tr>
									<tr><td>Jumlah Kamar</td><td><?php echo $row->kamar; ?></td></tr>
									<tr><td>Kamar Terisi</td><td><?php echo $row->terisi + $this->sg_model->GetKostIsi($row->nama); ?></td></tr>
									<tr><td>Fasilitas</td><td><?php echo $row->fasilitas; ?></td></tr>
									<tr><td>Rating</td><td><?php echo $row->rating; ?></td></tr>
								</tbody>
							</table>
						</div>
						<?php if ($this->session->userdata('islogin')) : ?>
						<a class="btn btn-success" title="Pesan Sekarang" href="<?php echo base_url('users') . '/kost/' . $this->sg_main->SeoUrl($row->nama); ?>"><span class="fa fa-shopping-cart"></span> Pesan Sekarang</a>
						<?php endif; ?>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>