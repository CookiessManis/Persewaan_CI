<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Rincian Transaksi</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets1/css/open-iconic-bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets1/css/style.css');?>">
</head>
<body>
	
		<div class="pt-5">
			<div class="card mx-auto" style="width: 30rem;">
				<div class="card-body">
					<h5 class="card-title text-center">VillaX</h5>
				<hr>
				<?php foreach($get_penyewa as $value) { ?>
				<div class="row mb-2">
					<div class="col-6">Check-in </div>
					<div class="col-6 pe-5">
						<input type="text"   value="<?= $value->tglCheckin ?>" disabled>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-6">Check-out </div>
					<div class="col-6 pe-5">
						<input type="text"  value="<?= $value->tglCheckout ?>" disabled>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-6">Price </div>
					<div class="col-6 pe-5">
						<input type="text"  value="Rp.<?= number_format($value->harga,2) ?>" disabled>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-6">Name </div>
					<div class="col-6 pe-5">
						<input type="text"  value="<?= $value->namaPenyewa ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-2">
					<div class="col-6">Phone</div>
					<div class="col-6 pe-5">
						<input type="text"  value="<?= $value->no_telp ?>" disabled>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-6">Email</div>
					<div class="col-6 pe-5">
						<input type="text"  value="<?= $value->email ?>" disabled>
					</div>
				</div>
				<div class="row mb-2">
					<div class="col-6">Address</div>
					<div class="col-6 pe-5">
						<input type="text"  value="<?= $value->alamat ?>" disabled>
					</div>
				</div>

				<hr>

				<div class="row mb-2">
					<div class="col-6 fw-bolder text-dark">Cottage</div>
					<div class="col-6 pe-5 text-dark fw-bolder">Sub Total</div>
				</div>

				<?php
				$checkin_date = new DateTime($value->tglCheckin);
				$checkout_date = new DateTime($value->tglCheckout);

				$interval = $checkin_date->diff($checkout_date);
				$total_days = $interval->days;
				
				$harga_per_hari = $value->harga;
				$total_biaya = $total_days * $harga_per_hari;
				?>

				<div class="row">
					<div class="col-6 fw-bolder text-dark">
						<input type="text"  value="<?= $value->namaCottage ?>" disabled>
					</div>
					<div class="col-6 pe-5 text-dark fw-bolder">
						<input type="text"  value="Rp.<?= number_format($total_biaya,2) ?>" disabled>
					</div>
				</div>

				
				<form action="<?php echo site_url('Penyewa/tambah_rincian'); ?>" method="post">
					<input type="text" name="id_penyewa" value="<?= $value->id_penyewa ?>" hidden>
					<div class="row">
						<div class="col-12 pt-2">
							<button class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
				<?php } ?>

				
			</div>
		</div>
	</div>
		

</body>
</html>
