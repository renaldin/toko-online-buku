<main role="main" class="register-login">

	<div class="row">
		<div class="col-md-4 mx-auto login" style="padding-bottom: 16%; padding-top:70px;" style="background-color: rgba(0, 0, 109, 0.904);">
			<div class="card" style="background-color: rgba(0, 0, 109, 0.904);">
				<div class="card-header text-white">
					<center><img src="<?= base_url('images/gambar/keranjang.png'); ?>" width="100" alt="">
					<b>BukuPedia</b></center>
				</div>
				
				<div class="card-body" style="margin-top: -20px;">
					<?= form_open('login', ['method' => 'POST']) ?>
						<div class="form-group">
							</i><?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control text-white', 'placeholder' => 'Masukkan alamat email', 'required' => true, 'style' => 'border-color: white; border-width: 2px; background-color:rgba(0, 0, 109, 0.904);']) ?>
							<?= form_error('email') ?>
						</div>
						<div class="form-group">
							<?= form_password('password', '', ['class' => 'form-control text-white', 'placeholder' => 'Masukkan password', 'required' => true, 'style' => 'border-color: white; border-width: 2px; background-color:rgba(0, 0, 109, 0.904);']) ?>
							<?= form_error('password') ?>
						</div>
						<center><button type="submit" class="btn btn-sm" style="background-color: white; color:rgba(0, 0, 109, 0.904); width:100%;"><b>Login</b></button></center>
					<?= form_close() ?>
				</div>
				<a href="<?= base_url('register') ?>" class="text-center text-white" style="padding-bottom: 5px;">Belum Mendaftar ? Daftar</a>
			</div>
		</div>
	</div>
</main>
