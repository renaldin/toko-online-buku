<main role="main" class="container">
	<div class="row">
		<div class="col-md-6">
			<div class="card">
                <div class="card-body">
                    <form action="<?= base_url("/komentar/add") ?>" method="POST">
                        <input type="hidden" name="id_user" value="<?= $this->session->userdata('id') ?>">
                        <input type="hidden" name="image" value="<?= $this->session->userdata('image') ?>">
						<div class="form-group">
							<textarea name="komentar" id="" cols="30" rows="5" class="form-control"></textarea>
							<?= form_error('address') ?>
						</div>
						<button class="btn btn-sm tombol text-white" type="submit"><b>Kirim</b></button>
					</form>
                </div>
            </div>
			<div class="card" style="margin-top: 5px; margin-bottom:5px;">
                <div class="card-body">
                    <?php foreach($content as $row ) {?>
                    <table border="0">
                        <tr>
                            <td><img src="<?= ($row->image) ? base_url("/images/user/$row->image") : base_url("/images/gambar/avatar.png") ?>" width="50" height="50" style="border-radius: 50%; margin-top: -20px;" alt=""></td>
                            <td width="6%px"></td>
                            <td width="100%">
                                <div class="alert alert-primary"><?= $row->komentar; ?></div>
                            </td>
                        </tr>
                    </table>
                    <?php } ?>
                </div>
            </div>
		</div>
		<div class="col-md-2">

		</div>
		<div class="col-md-4">
            <div class="card">
                <div class="card-body">
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
            </div>
		</div>
	</div>
</main>
