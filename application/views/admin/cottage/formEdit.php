<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Form Ubah Data Cottage</h3>
					</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
					<div class="col-md-12 col-sm-12 ">
					<div class="x_panel">
					<div class="x_title">
						<h2>Update Data Cottage</h2>
							<ul class="nav navbar-right panel_toolbox">
								<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
								</li>
								</ul>
						<div class="clearfix"></div>
						</div>
						<div class="x_content">
    <br />
	<form id="edit-form" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?= base_url('index.php/cottage/update/' . $cottage->idCottage); ?>" enctype="multipart/form-data">

   <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="idCottage">ID Cottage</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="text" id="idCottage" name="idCottage" class="form-control" value="<?= $cottage->idCottage; ?>" readonly>
                                </div>
                            </div>			

	<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="namaCottage">Nama Cottage <span class="required"></span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="namaCottage" name="namaCottage" required="required" class="form-control" value="<?= $cottage->namaCottage; ?>">
    </div>
</div>
						
	<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="jumlahKamar">Jumlah Kamar <span class="required"></span>
    </label>
    <div class="col-md-6 col-sm-6 ">
        <input type="text" id="jumlahKamar" name="jumlahKamar" required="required" class="form-control" value="<?= $cottage->jumlahKamar; ?>">
    </div>
</div>

<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="deskripsi">Deskripsi <span class="required"></span>
    </label>
    <div class="col-md-6 col-sm-6">
        <textarea id="deskripsi" name="deskripsi" required="required" class="form-control"><?= $cottage->deskripsi; ?></textarea>
    </div>
</div>

<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="harga">Harga <span class="required"></span>
    </label>
    <div class="col-md-6 col-sm-6">
        <input type="text" id="harga" name="harga" required="required" class="form-control" value="<?= $cottage->harga; ?>">
    </div>
</div>

				<div class="item form-group">   
						<div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <button type="submit" class="btn btn-success" id="sendMesrsageButton">Lanjut</button>
            </div>
        </div>
</form>
</div>
</div>
</div>				