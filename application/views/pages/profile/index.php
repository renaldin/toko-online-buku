<main role="main" class="container">
	<div class="row">
		<div class="col-md-3">
			<?php $this->load->view('layouts/_menu'); ?>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-4">
					<div class="card">
						<div class="card-body text-center">
							<img src="<?= $content->image ? base_url("/images/user/$content->image") : base_url("/images/gambar/avatar.png") ?>" alt="" width="100%" height="200">
						</div>
					</div>
				</div>
				<div class="col-md-8">
					<div class="card">
						<div class="card-body">
							<p>Nama: <?= $content->name ?></p>
							<p>E-Mail: <?= $content->email ?></p>
							<a href="<?= base_url("/profile/update/$content->id") ?>" class="btn tombol text-white"><b>Edit</b></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
