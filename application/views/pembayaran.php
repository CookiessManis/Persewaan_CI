<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pembayaran</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
		
		<link rel="stylesheet" href="<?php echo base_url('assets1/css/open-iconic-bootstrap.min.css');?>">
		<link rel="stylesheet" href="<?php echo base_url('assets1/css/style.css');?>">
	</head>
	<body>
		
		
		
		<div class="py-5">
			<div class="card mx-auto" style="width: 30rem;">
				
			<h5 class="card-title text-center fw-bold pt-3">Payment Method</h5>
			<div style="background-color:#f1f1f1; " class="px-2 py-2">
				<h5>Total</h5>
				<?php foreach($get_transaksi as $so){ ?>
					<?php
							$checkin_date = new DateTime($so->tglCheckin);
							$checkout_date = new DateTime($so->tglCheckout);
							
							$interval = $checkin_date->diff($checkout_date);
							$total_days = $interval->days;
							
							$harga_per_hari = $so->harga;
							$total_biaya = $total_days * $harga_per_hari;
							?>



				<?php } ?>
				<h4>Rp. <?= number_format($total_biaya,2) ?></h4>
				<span>Order Id #<?= $so->id_transaksi ?></span>
				</div>
				<span>Select Payment Method</span>



				

<div class="px-2">
	<div class="accordion" id="accordionExample">
							
		<div class="accordion-item">
			<h2 class="accordion-header" id="headingOne">
				<button class="accordion-button  w-100  btn-white border-white" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										<div class="d-flex justify-content-between">
											<span style="font-size:20px;" class="px-3 py-2">Transfer Bank</span>
											<div style="font-size:15px; padding-top:12px;">
												<span>💵</span>
												<span>💵</span>
												<span>💵</span>
												<span>💵</span>
											</div>
										</div>
									</button>
								</h2>
								
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body px-2">
										<span>Silahkan Transfer ke rekening berikut ini</span>
										<?php foreach($get_metode as $value) { ?>
											<?php if($value->id_pembayaran == 3){ ?>

										<div class="d-flex justify-content-between">
											<span> <?= $value->pay_1 ?> : 2000127</span>
											<span>Atas Nama: <?= $value->atas_nama ?></span>
										</div>
										<div class="d-flex justify-content-between ">
											<span> <?= $value->pay_2 ?> : 888979</span>
										</div>
										<div class="d-flex justify-content-between mb-3">
											<span> <?= $value->pay_3 ?> : 09990</span>
										</div>

										<form action="<?php echo site_url('Penyewa/simpan_pembayaran/'. $so->id_transaksi); ?>" method="post" enctype="multipart/form-data">
											
											<input type="text" value="<?= $value->metode ?>" name="metode">
											<input type="text" value="<?= $value->id_pembayaran ?>" name="id_pembayaran">
											
											
											<div class="mb-3 input-group input-group-sm">
												<input type="file" name="bukti_pembayaran" class="form-control-sm" id="fileInput<?= $value->id_pembayaran ?>" onchange="previewImage<?= $value->id_pembayaran ?>()">
												<img id="preview<?= $value->id_pembayaran ?>" src="<?= base_url('assets/unknown.jpg') ?>" alt="Selected Image" style="max-width: 90%;max-height: 200px;margin-top: 20px;"; >
											</div>
											<?php } ?>
											
										<?php } ?>
											
										
										<div class="d-flex justify-content-end pb-3" >
											<button class="btn btn-primary" style="width:100px">Bayar</button>
										</div>
										</form>

									</div>
								</div>
							</div>
							<div class="accordion-item">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button btn-white border-white w-100 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										<div class="d-flex justify-content-between">
											<span style="font-size:20px;" class="px-3 py-2">Pembayaran Digital</span>
											<div style="font-size:15px; padding-top:12px;">
												<span>📑</span>
												<span>📑</span>
												<span>📑</span>
												<span>📑</span>
											</div>
										</div>
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<span>Silahkan Transfer ke rekening berikut ini</span>

										<?php foreach($get_metode as $value) { ?>
											<?php if($value->id_pembayaran == 4){ ?>

										<div class="d-flex justify-content-between">
											<span> <?= $value->pay_1 ?> : 08121212</span>
											<span>Atas Nama: <?= $value->atas_nama ?></span>
										</div>
										<div class="d-flex justify-content-between ">
											<span> <?= $value->pay_2 ?> : 08121212</span>
										</div>
										<div class="d-flex justify-content-between mb-3">
											<span> <?= $value->pay_3 ?> : 08121212</span>
										</div>

										<form action="<?php echo site_url('Penyewa/simpan_pembayaran/'. $so->id_transaksi); ?>" method="post" enctype="multipart/form-data">
											
											<input type="text" value="<?= $value->metode ?>" name="metode">
											<input type="text" value="<?= $value->id_pembayaran ?>" name="id_pembayaran">
											
											
											<div class="mb-3 input-group input-group-sm">
												<input type="file" name="bukti_pembayaran" class="form-control-sm" id="fileInput<?= $value->id_pembayaran ?>" onchange="previewImage<?= $value->id_pembayaran ?>()">
												<img id="preview<?= $value->id_pembayaran ?>" src="<?= base_url('assets/unknown.jpg') ?>" alt="Selected Image" style="max-width: 90%;max-height: 200px;margin-top: 20px;"; >
											</div>
											<?php } ?>
											
										<?php } ?>
											
										
										<div class="d-flex justify-content-end pb-3" >
											<button class="btn btn-primary" style="width:100px">Bayar</button>
										</div>
										</form>

										
									</div>
								</div>
							</div>
						</div>
					</div>
				
		</div>
	</div>
	
	<?php foreach($get_metode as $value) { ?>

    <script>
        function previewImage<?= $value->id_pembayaran ?>() {
            var fileInput = document.getElementById('fileInput<?= $value->id_pembayaran ?>');
            var preview = document.getElementById('preview<?= $value->id_pembayaran ?>');
            var file = fileInput.files[0];

            if (file) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                };

                reader.readAsDataURL(file);
            } else {
                // If no file is selected, you can display a default image or handle it as per your requirements.
                preview.src = '#';
            }
        }
    </script>

<?php } ?>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<!-- 
<script src="<?php echo base_url('assets1/js/popper.min.js');?>"></script>
<script src="<?php echo base_url('assets1/js/bootstrap.min.js');?>"></script> -->
</body>
</html>
