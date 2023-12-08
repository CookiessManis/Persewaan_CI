<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Form Tambah Data Cottage</h3>
					</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
					<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
					<div class="x_title">
						<h2>Data Cottage</h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								</ul>
						<div class="clearfix"></div>
						</div>
						<div class="x_content">
				
    <br />
	<form id="edit-form" method="post" action="<?= base_url('index.php/cottage/updateGambar/' . $cottage->idCottage); ?>" enctype="multipart/form-data">

    <!-- Input hidden untuk idCottage dan idGambar -->
    <input type="hidden" name="idCottage" value="<?= $cottage->idCottage; ?>">
    <input type="hidden" name="idGambar" value="<?= $images->idGambar; ?>">


	<!-- Input file untuk gambar1 -->
<div class="form-group">
    <label for="gambar1">Pilih Gambar Baru 1:</label>
    <input type="file" id="gambar1" name="gambar1" >
</div>
<!-- Preview gambar yang sudah ada -->
<div class="form-group">
    <label for="gambar1">Gambar 1:</label>
    <?php if (!empty($images->gambar1)) : ?>
        <img src="<?= base_url('assets/admin/images/' . $images->gambar1); ?>" alt="Gambar 1" style="max-width: 150px;">
    <?php else : ?>
        <p>Tidak ada gambar yang tersedia.</p>
    <?php endif; ?>
</div>

<!-- Input file untuk gambar2 -->
<div class="form-group">
    <label for="gambar2">Pilih Gambar Baru 2:</label>
    <input type="file" id="gambar2" name="gambar2" >
</div>
<!-- Preview gambar yang sudah ada -->
<div class="form-group">
    <label for="gambar2">Gambar 2:</label>
    <?php if (!empty($images->gambar2)) : ?>
        <img src="<?= base_url('assets/admin/images/' . $images->gambar2); ?>" alt="Gambar 2" style="max-width: 150px;">
    <?php else : ?>
        <p>Tidak ada gambar yang tersedia.</p>
    <?php endif; ?>
</div>

<!-- Input file untuk gambar3 -->
<div class="form-group">
    <label for="gambar3">Pilih Gambar Baru 3:</label>
    <input type="file" id="gambar3" name="gambar3">
</div>
<!-- Preview gambar yang sudah ada -->
<div class="form-group">
    <label for="gambar3">Gambar 3:</label>
    <?php if (!empty($images->gambar3)) : ?>
        <img src="<?= base_url('assets/admin/images/' . $images->gambar3); ?>" alt="Gambar 3" style="max-width: 150px;">
    <?php else : ?>
        <p>Tidak ada gambar yang tersedia.</p>
    <?php endif; ?>
</div> 
						<div class="item form-group">   
						<div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-10 col-sm-10 offset-md-3">
                <button type="submit" class="btn btn-success" id="sendMesrsageButton" style="margin-right: 5px;">Simpan Update</button>
				</div>
				<button type="button" onclick="window.location.href='<?= base_url('index.php/cottage/edit/' . $cottage->idCottage); ?>'" class="btn btn-success">Kembali</button>
            </div>
        </div>
		</div>
</div>
    </form>
</div>		