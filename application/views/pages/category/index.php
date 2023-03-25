<main role="main" class="container">
	<div class="row">
		<div class="col-md-10 mx-auto">
			<div class="card mb-3">
				<div class="card-header" style="background-color: rgb(175, 246, 255);">
					<span>Kategori</span>
					<a href="<?= base_url('category/create') ?>" class="btn btn-sm tombol text-white"><b>Tambah</b></a>

					<div class="float-right">
						<?= form_open(base_url('category/search'), ['method' => 'POST']) ?>
							<div class="input-group">
								<input type="text" name="keyword" class="form-control form-control-sm text-center" placeholder="Cari" value="<?= $this->session->userdata('keyword') ?>">
								<div class="input-group-append">
									<button class="btn tombol btn-sm text-white" type="submit">
										<i class="fas fa-search"></i>
									</button>
									<a href="<?= base_url('category/reset') ?>" class="btn tombol btn-sm text-white">
										<i class="fas fa-eraser"></i>
									</a>
								</div>
							</div>
						<?= form_close() ?>
					</div>
				</div>
				<div class="card-body">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">#</th>
								<th scope="col">Title</th>
								<th scope="col">Slug</th>
								<th scope="col"></th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 0; foreach ($content as $row) :  $no++;?>
							<tr>
								<td><?= $no ?></td>
								<td><?= $row->title ?></td>
								<td><?= $row->slug ?></td>
								<td>
									<?= form_open("category/delete/$row->id", ['method' => 'POST']) ?>
									<?= form_hidden('id', $row->id) ?>
									<a href="<?= base_url("category/edit/$row->id") ?>" class="btn btn-sm tombol" style="border-radius: 50%;">
										<i class="fas fa-edit text-white"></i>
									</a>
									<button class="btn btn-sm tombol" style="border-radius: 50%;" type="submit" onclick="return confirm('Apakah yakin ingin menghapus?')">
										<i class="fas fa-trash text-white"></i>
									</button>
									<?= form_close() ?>
								</td>
							</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					
					<nav aria-label="Page navigation example">
						<?= $pagination ?>
					</nav>
				</div>
			</div>
		</div>
	</div>
</main>
