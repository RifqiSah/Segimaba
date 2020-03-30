	<div class="g-heading-v8 g-pb-100">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
	                <form class="reg-page" method="post" action="<?php echo base_url('core/signin'); ?>">
	                    <div class="reg-header">
	                        <h2>Masuk ke akun Anda</h2>
	                    </div>
	                    <?php echo $this->session->flashdata('status'); ?>
	                    <div class="input-group margin-bottom-20">
	                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
	                        <input name="username" type="text" placeholder="Username" class="form-control">
	                    </div>
	                    <div class="input-group margin-bottom-20">
	                        <span class="input-group-addon"><i class="fa fa-lock"></i></span>
	                        <input name="password" type="password" placeholder="Password" class="form-control">
	                    </div>
	                    <div class="margin-bottom-20">
	                    	<?php echo $this->recaptcha->getWidget(); ?>
	                    </div>
	                    <div class="row">
	                        <div class="col-md-12">
	                            <button class="btn btn-primary pull-right" type="submit">Sign In</button>
	                        </div>
	                    </div>
	                    <hr>
	                    <h4>Belum mempunyai akun Segimaba?</h4>
	                    <p><a href="<?php echo site_url('signup'); ?>">Klik Disini</a> untuk mendaftar.</p>
	                </form>
	            </div>
			</div>
		</div>
	</div>
	