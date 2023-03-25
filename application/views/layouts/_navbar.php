<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
	<div class="navbar" >
			
		<a class="navbar-brand" href="<?= base_url('') ?>" style="padding-left: 30px; font-family: Arial, Helvetica, sans-serif;"><b>BukuPedia</b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between"  id="navbarCollapse">
			<ul class="navbar-nav ">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('') ?>">Home <span class="sr-only">(current)</span></a>
				</li>
				<?php if ($this->session->userdata('is_login')) {?>
				<li class="nav-item">
					<a class="nav-link dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false" href="#">Kategori</a>
					<div class="dropdown">
					<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
						<ul class="list-group list-group-flush">
							<li class="dropdown-item" ><a style="color: rgba(0, 0, 109, 0.904);" href="<?= base_url('/') ?>">Semua Kategori</a></li>
							<?php foreach(getCategories() as $category) : ?>
							<li class="dropdown-item"><a  style="color: rgba(0, 0, 109, 0.904);" href="<?= base_url("/shop/category/$category->slug") ?>"><?= $category->title ?></a></li>
							<?php endforeach ?>
						</ul>
					</div>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="<?= base_url("/myorder") ?>">Order Saya</a>
				</li>
				<?php } ?>
				
				<?php if ($this->session->userdata('role') == 'admin') : ?>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage</a>
					<div class="dropdown-menu" aria-labelledby="dropdown-1">
						<a  style="color: rgba(0, 0, 109, 0.904);" href="<?= base_url('category') ?>" class="dropdown-item">Kategori</a>
						<a  style="color: rgba(0, 0, 109, 0.904);" href="<?= base_url('product') ?>" class="dropdown-item">Produk</a>
						<a   style="color: rgba(0, 0, 109, 0.904);" href="<?= base_url('order') ?>" class="dropdown-item">Daftar Order</a>
						<a  style="color: rgba(0, 0, 109, 0.904);" href="<?= base_url('user') ?>" class="dropdown-item">Pengguna</a>
					</div>
				</li>
				<?php endif ?>
			</ul>
			<ul class="navbar-nav">
				<li class="nav-item">
					<a href="<?= base_url('cart') ?>" class="nav-link"><i class="fas fa-shopping-cart"></i> Cart (<?= getCart(); ?>)</a>
				</li>
				<?php if (! $this->session->userdata('is_login')) : ?>
				<li class="nav-item">
					<a href="<?= base_url('/login') ?>" class="nav-link">Login</a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('/register') ?>" class="nav-link">Register</a>
				</li>
				<?php else : ?>
				<li class="nav-item dropdown" style="padding-right: 60px; margin-top:-2px;">
					<!-- Default dropleft button -->
					<div class="btn-group dropleft">
					<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><img src="<?= ($this->session->userdata('image') == null) ? base_url('images/gambar/avatar.png') : base_url('images/user/'.$this->session->userdata('image')) ?>" alt="" class="rounded-circle" width="40" height="40"></a>
					<div class="dropdown-menu">
					<div>
                        	<center><img src="<?= ($this->session->userdata('image') == null) ? base_url('images/gambar/avatar.png') : base_url('images/user/'.$this->session->userdata('image')) ?>" width="100" height="100" class="rounded-circle" alt=""><br>
							<?= $this->session->userdata('name')?></center>
						<div class="dropdown-divider"></div>
						<div style="padding: 0 10px 0 10px;">
						<table style="margin-left: 2px;">
							<tr class="dropdorn-item"><th>Email</th></tr>
							<tr class="dropdorn-item"><td><?= $this->session->userdata('email')?></td></tr>
							<tr class="dropdorn-item"><th>Nomor Telepon</th></tr>
							<tr class="dropdorn-item"><td><?= $this->session->userdata('telepon')?></td></tr>
						</table>
						</div>
						<div class="justify" style="padding: 10px 20px 0 20px;">
						<center>
							<table>
								<tr>
									<td><a href="<?= base_url('/profile') ?>" class="btn tombol text-white"><b>Profile</b></a><br></td>
									<td><a href="<?= base_url('/logout') ?>" class="btn tombol text-white"><b>Logout</b></a><br></td>
								</tr>
							</table>
							<a href="<?= base_url('/komentar')?>" style="margin: 5px;">Kritik dan Saran</a>
						</center>
						</div>
					</div>
					</div>
				</div>
				</li>
				<?php endif ?>

			</ul>
		</div>

	</div>
</nav>
