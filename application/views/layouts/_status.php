<?php 
	if ($status == 'waiting') {
		$badge_status	= 'badge text-white tombol';
		$status			= 'Menunggu Pembayaran';
	}

	if ($status == 'paid') {
		$badge_status	= 'badge tombol text-white';
		$status			= 'Dibayar';
	}

	if ($status == 'delivered') {
		$badge_status	= 'badge tombol text-white';
		$status			= 'Dikirim';
	}

	if ($status == 'cancel') {
		$badge_status	= 'badge tombol text-white';
		$status			= 'Dibatalkan';
	}
?>

<?php if ($status) : ?>
<span class="badge badge-pill <?= $badge_status ?>"><?= $status ?></span>
<?php endif ?>
