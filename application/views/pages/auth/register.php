<main role="main" class="register-login">
	
	<div class="row">
		<div class="col-md-4 mx-auto" style="padding-top:70px;">
			<div class="card">
			
				<div class="card-header">
					<center><img style="margin-top: -60px;" src="<?= base_url('images/gambar/register.png')?>" width="100" alt=""></center>
				</div>
				<div class="card-body" style="margin-top: -20px;">
					<?= form_open('register', ['method' => 'POST']) ?>
						<div class="form-group">
							<?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true, 'placeholder' => 'Nama', 'style' => 'background-color:rgb(196, 196, 196);']) ?>
							<?= form_error('name') ?>
						</div>
						<div class="form-group">
							<?= form_input('telepon', $input->telepon, ['class' => 'form-control', 'required' => true, 'placeholder' => 'Nomor Telepon', 'style' => 'background-color:rgb(196, 196, 196);']) ?>
							<?= form_error('telepon') ?>
						</div>
						<div class="form-group">
							<?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Email', 'required' => true, 'style' => 'background-color:rgb(196, 196, 196);']) ?>
							<?= form_error('email') ?>
						</div>
						<div class="form-group">
							<?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password minimal 8 karakter', 'required' => true, 'style' => 'background-color:rgb(196, 196, 196);']) ?>
							<?= form_error('password') ?>
						</div>
						<div class="form-group">
							<?= form_password('password_confirmation', '', ['class' => 'form-control', 'placeholder' => 'Masukkan password yang sama', 'required' => true, 'style' => 'background-color:rgb(196, 196, 196);']) ?>
							<?= form_error('password_confirmation') ?>
						</div>
						<center><button type="submit" class="btn btn-sm  text-white" style="background-color: rgba(0, 0, 109, 0.904);" style="border-radius: 10px;"><b>Register</b></button></center>
					<?= form_close() ?>
				</div>
				<a class="text-center pb-2" href="<?= base_url('login'); ?>">kembali login ?</a>
			</div>
		</div>
	</div>
</main>
