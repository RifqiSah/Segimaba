	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
	                <form class="reg-page" method="post" action="<?php echo base_url('core/signup'); ?>" enctype="multipart/form-data">
	                    <div class="reg-header">
	                        <h2>Daftar akun Segimaba</h2>
	                    </div>
	                    <?php
	                    	$nama = $this->uri->segment(2);
	                    	$nama = str_replace("-", " ", $nama);
	                    	$nama = ucwords($nama);
	                    ?>
	                    <?php echo $this->session->flashdata('status'); ?>
	                    <label>Nama Depan <span class="color-red">*</span></label>
	                    <input type="text" class="form-control margin-bottom-20" name="fname" required="required" class="form-control">
			            <label>Nama Belakang <span class="color-red">*</span></label>
			            <input type="text" class="form-control margin-bottom-20" name="lname" required="required" class="form-control">
			            <label>Username <span class="color-red">*</span></label>
	                    <div class="input-group margin-bottom-20">
	                    	<span class="input-group-addon"><i class="fa fa-user"></i></span>
	                    	<input type="text" class="form-control margin-bottom-20" name="username" required="required" class="form-control">
	                    </div>
	                    <label>Email <span class="color-red">*</span></label>
	                    <div class="input-group margin-bottom-20">
	                    	<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
	                    	<input type="text" class="form-control margin-bottom-20" name="email" required="required" class="form-control">
	                    </div>
	                    <div class="row">
	                        <div class="col-sm-6">
	                            <label>Password <span class="color-red">*</span></label>
	                            <div class="input-group margin-bottom-20">
	                    			<span class="input-group-addon"><i class="fa fa-key"></i></span>
	                            	<input type="password" class="form-control margin-bottom-20" name="pass1" required="required" class="form-control">
	                            </div>
	                        </div>
	                        <div class="col-sm-6">
	                            <label>Konfirmasi Password <span class="color-red">*</span></label>
	                            <div class="input-group margin-bottom-20">
	                    			<span class="input-group-addon"><i class="fa fa-key"></i></span>
	                            	<input type="password" class="form-control margin-bottom-20" name="pass2" required="required" class="form-control">
	                            </div>
	                        </div>
	                    </div>
	                    <label>Nomor Mobile <span class="color-red">*</span></label>
	                    <input type="text" class="form-control margin-bottom-20" name="mobile" required="required" class="form-control">
	                    <label>Jurusan <span class="color-red">*</span></label>
			            <div class="select-wrapper">
							<select name="jurusan" required="required" class="form-control margin-bottom-20">
								<option value="TIF">Teknik Informatika</option>
								<option value="TE">Teknik Elektro</option>
								<option value="TS">Teknik Sipil</option>
								<option value="TG">Teknik Geologi</option>
								<option value="TIN">Teknik Industri</option>
							</select>
						</div>
			            <label>Angkatan <span class="color-red">*</span></label>
			            <select name="angkatan" required="required" class="form-control margin-bottom-20">
							<?php
								$tahun = date('Y');
								for($x = $tahun; $x >= ($tahun - 7); $x--)
									printf("<option value='%d'>%d</option>", $x, $x);
							?>
						</select>
	                    <label>Upload foto diri serta bukti (dokumen + ktm dijadikan satu file) bahwa Anda telah resmi diterima sebagai mahasiswa baru Universitas Jenderal Soedirman. <span class="color-red">Ukuran maksimal 1MB</span></label>
	                    <div class="row">
	                    	<div class="col-sm-6">
	                    		<label>Bukti Dokumen (.pdf) <span class="color-red">*</span></label>
	                    		<input name="dokumen" class="margin-bottom-20" type="file" required="required" placeholder="File">
	                    	</div>
	                    	<div class="col-sm-6">
	                    		<label>Foto Diri (.jpg) <span class="color-red">*</span></label>
	                    		<input name="foto-profil" class="margin-bottom-20" type="file" required="required" placeholder="File">
	                    	</div>
	                    </div>
	                    <hr>
	                    <div class="row">
	                        <div class="col-lg-12">
	                            <button class="btn btn-primary pull-right" type="submit">Register</button>
	                        </div>
	                    </div>
	                    <hr>
	                    <h4>Sudah mempunyai akun Segimaba?</h4>
	                    <p><a href="<?php echo site_url('signin'); ?>">Klik Disini</a> untuk masuk.</p>
	                </form>
	            </div>
			</div>
		</div>
	</div>