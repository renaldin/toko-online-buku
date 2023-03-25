<main role="main" class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-body kotak">
							Kategori: <strong><?= isset($category) ? $category : 'Semua Kategori' ?></strong>
						</div>
					</div>
				</div>
			</div>

			<div class="row">
				<?php foreach($content as $row) : ?>
				<div class="col-md-6">
					<div class="card mb-3">
						<center><img style="width: 50%;" src="<?= $row->image ? base_url("/images/product/$row->image") : base_url("/images/product/default.png") ?>" alt=""  class="card-img-top"></center>
						<div class="card-body">
							<h5 class="card-title"><?= $row->product_title ?></h5>
							<p class="card-text"><strong>Rp<?= number_format($row->price, 0, ',', '.') ?>,-</strong></p>
							<p class="card-text"><?= $row->description ?></p>
							<a href="<?= base_url("/shop/category/$row->category_slug") ?>" class="badge tombol text-white"><i class="fas fa-tags"></i> <?= $row->category_title ?></a>
						</div>
						<div class="card-footer">
							<form action="<?= base_url("/cart/add") ?>" method="POST">
								<input type="hidden" name="id_product" value="<?= $row->id ?>">
								<div class="input-group">
									<input type="number" name="qty" value="1" class="form-control">
									<div class="input-group-append">
										<button class="btn tombol text-white">Add to Cart</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				<?php endforeach ?>
			</div>

			<nav aria-label="Page navigation example">
				<?= $pagination ?>
			</nav>
		</div>
		<div class="col-md-3">
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header kotak">
							Pencarian
						</div>
						<div class="card-body">
							<form action="<?= base_url("/shop/search") ?>" method="POST">
								<div class="input-group">
									<input type="text" name="keyword" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>" class="form-control">
									<div class="input-group-append">
										<button class="btn tombol" type="submit">
											<i class="fas fa-search text-white"></i>
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<?php if($this->session->userdata('is_login')) {?>
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header kotak">
							Rekomendasi
						</div>
						<ul class="list-group list-group-flush">
							<li class="list-group-item"><a href="<?= base_url('/') ?>">Semua Kategori</a></li>
							<li class="list-group-item"><a href="<?= base_url("/shop/sortby/desc") ?>">Termahal</a></li>
							<li class="list-group-item"><a  href="<?= base_url("/shop/sortby/asc") ?>">Termurah</a></li>
							
						</ul>
					</div>
				</div>
			</div>
			<?php } else { ?>
			<div class="row">
				<div class="col-md-12">
					<div class="card mb-3">
						<div class="card-header shop-now">
							<strong><h3>BUKU DISINI MANTAP JIWA BANGET</h3></strong>
						</div>
						<div class="card-header p-now">
							<p>Buku yang kami jual berasal dari penulis - penulis terhebah dunia akhirat</p>
						</div>
						<div class="card-footer text-center" style="background-color: rgba(0, 0, 109, 0.904);">
							<a href="<?= base_url('/login')?>" class="btn btn-now "><strong>SHOP NOW</strong></a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>
	</div>
</main>

