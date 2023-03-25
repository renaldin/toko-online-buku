<main role="main" class="container">
	
	<div class="row">
		<div class="col-md-12">
			<div class="card mb-3">
				<div class="card-header kotak">
					Keranjang Belanja
				</div>
				<div class="card-body">
					
					<div>
						<h2><b>TOTAL PEMBAYARAN</b></h2>
						<h2><b>Rp<?= number_format(array_sum(array_column($content, 'subtotal')), 0, ',', '.') ?>,-</b></h2>
					</div>
					<table class="table">
						<thead>
							<tr>
								<th>Nama Buku</th>
								<th class="text-center">Harga</th>
								<th class="text-center">Jumlah</th>
								<th class="text-center">Subtotal</th>
								<th></th>
							</tr>
						</thead>
						<tbody>
						<?php foreach($content as $row) : ?>		
							<tr>
								<td>
									<p><img src="<?= $row->image ? base_url("/images/product/$row->image") : base_url('/images/product/default.png') ?>" alt="" height="50"> <strong><?= $row->title ?></strong></p>
								</td>
								<td class="text-center">Rp<?= number_format($row->price, 0, ',', '.') ?>,-</td>
								<td>
									<form action="<?= base_url("cart/update/$row->id") ?>" method="POST">
										<input type="hidden" name="id" value="<?= $row->id ?>">
										<div class="input-group">
											<input type="number" name="qty" class="form-control text-center" value="<?= $row->qty ?>">
											<div class="input-group-append">
												<button class="btn tombol text-white" style="border-radius: 50%;" type="submit"><i class="fas fa-check"></i></button>
											</div>
										</div>
									</form>
								</td>
								<td class="text-center">Rp<?= number_format($row->subtotal, 0, ',', '.') ?>,-</td>
								<td>
									<form action="<?= base_url("cart/delete/$row->id") ?>" method="POST">
										<input type="hidden" name="id" value="<?= $row->id ?>">
										<button class="btn btn-white tombol text-white" style="border-radius: 50%;" type="submit" onclick="return confirm('Apakah yakin ingin menghapus?')"><i class="fas fa-trash-alt"></i></button>
									</form>
								</td>
							</tr>
							<?php endforeach ?>
							<tr>
								<td colspan="3"><strong>Total:</strong></td>
								<td class="text-center"><strong>Rp<?= number_format(array_sum(array_column($content, 'subtotal')), 0, ',', '.') ?>,-</strong></td>
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="card-footer">
					<a href="#" data-toggle="modal" data-target="#exampleModal" class="btn tombol text-white float-right">Pembayaran <i class="fas fa-angle-right"></i></a>
					<a href="<?= base_url('/') ?>" class="btn tombol text-white text-white"><i class="fas fa-angle-left"></i> Kembali Belanja</a>
				</div>
			</div>
		</div>
	</div>
</main>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Metode Pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<div class="row">
			<div class="col-md-12">
				<b>Klik Gambarnya</b>
			</div>
		</div>
        <div class="row">
			<div class="col-md-4">
				<a href="<?= base_url('/checkout')?>"><img width="100%" src="<?= base_url('/images/gambar/bank.png')?>" alt=""></a>
			</div>
			<div class="col-md-4">
				<a href="<?= base_url('/checkout/indomaret')?>"><img width="100%" style="margin-top: -25px;" src="<?= base_url('/images/gambar/indomaret.png')?>" alt=""></a>
			</div>
			<div class="col-md-4">
				<a href="<?= base_url('/checkout/dana')?>"><img width="100%" src="<?= base_url('/images/gambar/dana.png')?>" alt=""></a>
			</div>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
