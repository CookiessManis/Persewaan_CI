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
    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo site_url('cottage/save');?>" enctype="multipart/form-data">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="idCottage">ID Cottage <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6">
                <input type="text" id="idCottage" name="idCottage" required="required" class="form-control">
            </div>
        </div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="namaCottage">Nama Cottage <span class="required"></span>
							</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="name" name="namaCottage" required="required" class="form-control ">
						</div>
						</div>
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="jumlahKamar">Jumlah Kamar <span class="required"></span>
							</label>
						<div class="col-md-6 col-sm-6 ">
								<input type="text" id="number" name="jumlahKamar" required="required" class="form-control">
						</div>
						</div>						
						<div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align">Deskripsi <span class="required"></span>
							</label>
						<div class="col-md-6 col-sm-6 ">
							<textarea class="form-control" rows="3" id="message" name="deskripsi" placeholder="Description"></textarea>
						</div>
						</div>
                         <div class="item form-group">
							<label class="col-form-label col-md-3 col-sm-3 label-align" for="number">Harga<span class="required"></span>
							</label>
						<div class="col-md-6 col-sm-6 ">
							<input type="text" id="number" name="harga" required="required" class="form-control">
						</div>
						</div> 
						<div class="item form-group">   
						<div class="ln_solid"></div>
        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <button type="submit" class="btn btn-success" id="sendMesrsageButton">Tambahkan</button>
				<button type='reset' class="btn btn-success">Reset</button>
            </div>
        </div>
    </form>
</div>			