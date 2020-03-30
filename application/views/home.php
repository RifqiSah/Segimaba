	<!-- Main -->
	<div class="interactive-slider-v2">
        <div class="container">
            <h1>Segimaba</h1>
            <p>Segala Informasi Bagi Mahasiswa Baru</p>
        </div>
    </div>
	<!-- End Main -->

	<!-- Pengumuman -->
	<div class="news text-center g-heading-v8 g-pt-85 g-pb-30" id="pengumuman">
		<div class="container-fluid">
			<div class="row g-mb-70">
				<div class="col-sm-8 col-sm-offset-2">
					<h3>Selamat Datang</h3>
					<p>Selamat datang Mahasiswa Baru Fakultas Teknik Universitas Jenderal Soedirman Purwokerto!</p>
					<p>Sekarang kalian tidak perlu pusing-pusing untuk mencari informasi seputar kampus seperti info perkuliahan, kegiatan yang diadakan oleh Himpunan Mahasiswa maupun semua kejadian yang terjadi di sekitar kampus karena kita akan update semuanya disini! Tapi tidak hanya itu semua ...</p>
					<p>Bagi kamu-kamu semua yang sedang mencari KOSTAN di sinilah tempat yang tepat bagi kalian, karena kita menyediakan info kost-kostan untuk kalian sehingga kalian dapat menemukan tempat tinggal yang cocok bagi kalian semua</p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Pengumuman -->

	<!-- Kost Pilihan -->
	<div class="popular-kost text-center g-heading-v8 g-pt-85 g-pb-70 bg-dark" id="popular-kost">
		<div class="container">
			<h2 class="h2"><em class="block-name">Untuk Anda</em><br> <strong>Rekomendasi</strong> Kost!</h2>
			<div class="row text-left">
				<?php
					foreach ($result_kost_limit as $row)
					{
						printf("<div class='col-md-4 col-xs-6 col-2xs-12 g-mb-30'>");
						printf("<div class='popular-kost-item'>");
						printf("<div class='img-wrapper img-wrapper--shadow'><img src='%s' alt='Image' class='img-responsive'></div>", base_url('cdn/kost') . '/' . $this->sg_main->SeoUrl($row->nama) . '-1.jpg');
						printf("<div class='popular-kost-item-info'>");
						printf("<div class='popular-kost-item-info-price'>IDR <strong>%s</strong></div>", number_format($row->harga));
						printf("<div class='popular-kost-item-info-inner'>");
						printf("<h3><em>%s</em> %s</h3>", $row->ukuran, $row->nama);
						printf("</div>");
						printf("</div>");
						printf("<a href='kost/%s' class='popular-kost-item__more'>More</a>", $this->sg_main->SeoUrl($row->nama));
						printf("</div>");
						printf("</div>");
					}
				?>
			</div>
		</div>
	</div>
	<!-- End Kost Pilihan -->

	<!-- Daftar Kost -->
	<div class="kost-all text-center g-heading-v8 g-pt-85 g-pb-100" id="kost-all">
		<div class="container-fluid">
			<h2><strong><em class="block-name">Rumah Kost</em><br> Rumah Kost</strong> Kami</h2>
			<div class="our-tours-list-wrapper">
				<div class="our-tours-list text-left">
					<?php
						function showstar($rate) {
							printf("<ul class='list-inline star-vote'>");

							for ($star = 1; $star <= 5; $star++) {
								$status = 'fa-star-o';

								if ($star <= $rate)
									$status = 'fa-star';

								printf("<li><i class='g-color-default fa %s'></i></li>", $status);
							}

							printf("<li>(%.01f)</li>", $rate);
							printf("</ul>");
						}

						foreach ($result_kost_all as $row)
						{
							printf("<div class='our-tours-list-item'>");
							printf("<div class='img-wrapper img-wrapper--shadow'><img src='%s' alt='Image' class='img-responsive'></div>", base_url('cdn/kost') . '/' . $this->sg_main->SeoUrl($row->nama) . '-1.jpg');
							printf("<h3>%s</h3>", $row->nama);

							showstar($row->rating);

							printf("<p>%s</p>", $row->lokasi);
							printf("<div class='our-tours-price'>IDR %s</div>", number_format($row->harga));
							printf("<a href='kost/%s' class='popular-kost-item__more'>More</a>", $this->sg_main->SeoUrl($row->nama));
							printf("</div>\n");
						}
					?>
				</div>
			</div>
			<br><br>
			<a href="<?php echo site_url('kost'); ?>" title="Lihat Semua" class="btn btn-warning">Lihat Semua</a>
		</div>
	</div>
	<!-- End Daftar Kost -->

	<!-- Berita -->
	<div class="news text-center g-heading-v8 g-pt-85 g-pb-30 bg-dark" id="berita">
		<div class="container-fluid">
			<div class="row g-mb-70">
				<div class="col-sm-8 col-sm-offset-2">
					<h2 class="h2"><em class="block-name">Berita</em><br> <strong>Informasi</strong> Terbaru</h2>
					<div>Dapatkan beragam informasi mulai dari informasi daftar ulang, pengumuman, serta event-event yang sedang dan akan berjalan di kampus! Informasi yang kami berikan sangat akurat untuk Anda</div>
				</div>
			</div>
			<div class="row g-mb-70">
				<?php
					foreach ($result_news as $row)
					{
						printf("<div class='col-sm-8 col-sm-offset-2'>");
						printf("<h3 class='text-left'>%s</h3>", $row->judul);
						printf("%s", $row->isi);
						printf("</div>");
					}
				?>
			</div>
		</div>
	</div>
	<!-- End Berita -->
	
	<!-- <script type="text/javascript">
		$(document).ready(function(){
			$("#UserModal").modal('show');
		});
	</script> -->
	<div class="modal fade" id="UserModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        		<h4 class="modal-title text-center" id="myModalLabel">Hore!!</h4>
	      		</div>
	      		<div class="modal-body">
	      			<img class="img-responsive" src="<?php echo site_url('cdn/ptn/unsoed/SNMPTN.png'); ?>">
	      		</div>
	      		<div class="modal-footer">
	        		<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
	      		</div>
	    	</div>
	  	</div>
	</div>