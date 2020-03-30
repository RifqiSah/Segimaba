	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="border">Admin Control Panel</h1>
					<p>Informasi sistem, database dan pengaturan website Segimaba</p>
					<div class="row">
		                <div class="col-lg-3 col-md-6">
		                    <div class="panel panel-primary">
		                        <div class="panel-heading">
		                            <div class="row">
		                                <div class="col-xs-3">
		                                    <i class="fa fa-list fa-5x"></i>
		                                </div>
		                                <div class="col-xs-9 text-right">
		                                    <div class="huge"><?php echo $nkost; ?></div>
		                                    <div>Kost Terdaftar</div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6">
		                    <div class="panel panel-green">
		                        <div class="panel-heading">
		                            <div class="row">
		                                <div class="col-xs-3">
		                                    <i class="fa fa-user fa-5x"></i>
		                                </div>
		                                <div class="col-xs-9 text-right">
		                                    <div class="huge"><?php echo $nuser; ?></div>
		                                    <div>User Terdaftar</div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6">
		                    <div class="panel panel-yellow">
		                        <div class="panel-heading">
		                            <div class="row">
		                                <div class="col-xs-3">
		                                    <i class="fa fa-shopping-cart fa-5x"></i>
		                                </div>
		                                <div class="col-xs-9 text-right">
		                                    <div class="huge"><?php echo $nbayar; ?></div>
		                                    <div>Belum Bayar</div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		                <div class="col-lg-3 col-md-6">
		                    <div class="panel panel-red">
		                        <div class="panel-heading">
		                            <div class="row">
		                                <div class="col-xs-3">
		                                    <i class="fa fa-reply fa-5x"></i>
		                                </div>
		                                <div class="col-xs-9 text-right">
		                                    <div class="huge"><?php echo $npindah; ?></div>
		                                    <div>Pindah Kost</div>
		                                </div>
		                            </div>
		                        </div>
		                    </div>
		                </div>
		            </div>
		            <h1 class="border">Opsi lainnya:</h1>
            		<div>
						<a class="btn btn-primary" href="<?php echo base_url('admin/kost/add'); ?>" role="button"><span class="fa fa-plus"></span> Tambah Kost</a>
						<a class="btn btn-primary" href="<?php echo base_url('admin/kost/info'); ?>" role="button"><span class="fa fa-list"></span> Informas Kost</a>
						<a class="btn btn-success" href="<?php echo base_url('admin/tambahuser'); ?>" role="button"><span class="fa fa-plus"></span> Tambah User</a>
						<a class="btn btn-success" href="<?php echo base_url('admin/user'); ?>" role="button"><span class="fa fa-users"></span> Informasi User</a>
						<a class="btn btn-warning" href="<?php echo base_url('admin/news/add'); ?>" role="button"><span class="fa fa-plus"></span> Tambah Berita</a>
						<a class="btn btn-warning" href="<?php echo base_url('admin/news/info'); ?>" role="button"><span class="fa fa-list"></span> Daftar Berita</a>
					</div>
				</div>
			</div>
		</div>
	</div>