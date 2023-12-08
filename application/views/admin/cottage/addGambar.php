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
    <form method="post" action="<?php echo site_url('cottage/save_gambar'); ?>" enctype="multipart/form-data">
	
	<div class="item form-group">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="idCottage">Pilih ID Cottage:</label>
    <select name="idCottage">
        <?php foreach ($cottageList as $cottage) : ?>
            <option value="<?php echo $cottage['idCottage']; ?>"><?php echo $cottage['idCottage']; ?></option>
        <?php endforeach; ?>
    </select>
	</div>
                <div class="item form-group">
                     <label class="col-form-label col-md-3 col-sm-3 label-align" for="idGambar">ID Gambar <span class="required"></span>
                    </label>
                <div class="col-md-6 col-sm-6">
                    <input type="text" id="idGambar" name="idGambar" required="required" class="form-control">
                </div>
                </div>
                        <div class="item form-group">
            				<label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar1">Tampak Depan<span class="required"></span>
            				</label>
            			<div class="col-md-6 col-sm-6">
               				 <input type="file" name="gambar1" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" accept="image/*"/>
            			</div>
        				</div>
                        <div class="item form-group">
            				<label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar2">Tampak Dalam<span class="required"></span>
            				</label>
            			<div class="col-md-6 col-sm-6">
               				 <input type="file" name="gambar2" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" accept="image/*"/>
            			</div>
        				</div>
                        <div class="item form-group">
            				<label class="col-form-label col-md-3 col-sm-3 label-align" for="gambar3">Tampak Kamar<span class="required"></span>
            				</label>
            			<div class="col-md-6 col-sm-6">
               				 <input type="file" name="gambar3" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" accept="image/*"/>
            			</div>
        				</div>
						<div class="item form-group">   
						<div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <button type="submit" class="btn btn-success" id="sendMesrsageButton">Submit</button>
            </div>
        </div>
		</form>
</div>					