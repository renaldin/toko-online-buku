<main role="main" class="container">
	
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header kotak">
					Checkout Berhasil <img src="<?= base_url('/images/gambar/bank.png')?>" width="60" alt="">
				</div>
				<div class="card-body">
					<h5>Nomer Order: <?= $content->invoice ?></h5>
					<p>Terima kasih, sudah berbelanja.</p>
					<p>Silakan lakukan pembayaran untuk bisa kami proses selanjutnya dengan cara:</p>
					<ol>
						<li>Lakukan pembayaran pada rekening <strong>BCA 3209123123</strong> a/n PT. BukuPedia</li>
						<li>Sertakan keterangan dengan nomor order: <strong><?= $content->invoice ?></strong></li>
						<li>Total pembayaran: <strong>Rp<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
					</ol>
					<p>Jika sudah, silakan kirimkan bukti transfer di halaman konfirmasi atau bisa <a href="<?= base_url("/myorder/detail/$content->invoice") ?>">klik disini</a>!</p>
					<a href="<?= base_url('/') ?>" class="btn tombol text-white"><i class="fas fa-angle-left"></i> <b>Kembali</b></a>
				</div>
			</div>
		</div>
	</div>
</main>
