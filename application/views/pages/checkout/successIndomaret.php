<main role="main" class="container">
	
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header kotak">
					Checkout Berhasil <img src="<?= base_url('/images/gambar/indomaret.png')?>" width="60" alt="">
				</div>
				<div class="card-body">
					<h5>Nomer Order: <?= $content->invoice ?></h5>
					<p>Terima kasih, sudah berbelanja.</p>
					<p>Silakan lakukan pembayaran untuk bisa kami proses selanjutnya dengan cara:</p>
					<ol>
						<li>Lakukan pembayaran ke gerai Indomaret, katakan ke kasir mau melakukan pembayaran ke BukuPedia Shop</li>
						<li>Sertakan keterangan dengan nomor order: <strong><?= $content->invoice ?></strong></li>
						<li>Total pembayaran: <strong>Rp<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
					</ol>
					<a href="<?= base_url('/') ?>" class="btn tombol text-white"><i class="fas fa-angle-left"></i> <b>Kembali</b></a>
				</div>
			</div>
		</div>
	</div>
</main>
