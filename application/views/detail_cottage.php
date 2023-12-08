<section class="ftco-section">
    <div class="container">
    <?php foreach($cottage as $val){?>
            <?php if ($val->idCottage == $idCottage) { ?>
        <div class="row">
          <div class="col-lg-8">
          	<div class="row">
          		<div class="col-md-12 ftco-animate">
          			<h2 class="mb-4"><?php echo $val->namaCottage;?> <span>(<?php echo $val->jumlahKamar;?> Available)</span></h2>
          			<div class="single-slider owl-carousel">
          				<div class="item">
          					<div class="room-img" style="background-image: url(<?php echo base_url('assets/admin/images/'.$val->gambar1);?>);"></div>
          				</div>
          				<div class="item">
          					<div class="room-img" style="background-image: url(<?php echo base_url('assets/admin/images/'.$val->gambar2);?>);"></div>
          				</div>
          				<div class="item">
          					<div class="room-img" style="background-image: url(<?php echo base_url('assets/admin/images/'.$val->gambar3);?>);"></div>
          				</div>
          			</div>
          		</div>
                  <h2>Rp <?php echo number_format ($val->harga,0,',','.');?><span>/Pernight</span></h2>
          		<div class="col-md-12 room-single mt-4 mb-5 ftco-animate">
    						<p><?php echo $val->deskripsi;?></p>
    						<div class="d-md-flex mt-5 mb-5">
    							<ul class="list">
	    							<li><span>Max:</span> 3 Persons</li>
	    							<li><span>Size:</span> 24 sqm</li>
	    						</ul>
	    						<ul class="list ml-md-5">
	    							<li><span>View:</span> Mountains View</li>
	    							<li><span>Bed:</span> 1 King Bed</li>
	    						</ul>
    						</div>
    						<p>With a touch of environmentally friendly architecture, our vantage villas provide an experience that not only pampers guests, but also preserves the natural beauty of the surroundings. From every window, witness the priceless wonders of nature, from verdant forests to picturesque valleys. Experience tranquility and harmony in a place that provides an escape from everyday life. Whatever you choose, this vantage villa provides an unforgettable experience involving nature and comfort.</p>
          		</div>
          		<div class="col-md-12 room-single ftco-animate mb-5 mt-4">
          			<h3 class="mb-4">Take A Tour</h3>
          			<div class="block-16">
		              <figure>
		                <img src="<?php echo base_url('assets1/images/thumb2.jpg');?>" alt="Image placeholder" class="img-fluid">
		                <a href="<?php echo base_url('assets1/images/vid_aboutus.mp4');?>" class="play-button popup-vimeo"><span class="icon-play"></span></a>
		              </figure>
		            </div>
          		</div>
          		<div class="col-md-12 properties-single ftco-animate mb-5 mt-4">
          			<div class="row">

          			</div>  
          		</div>
                  <?php break; ?>
            <?php } ?>
                <?php } ?>
          	</div>
          </div> <!-- .col-md-8 -->
          <div class="col-lg-4 sidebar">
	      		<div class="sidebar-wrap bg-light ftco-animate">
	      			<h3 class="heading mb-4">Reservation Form</h3>
	      			<form action="<?php echo site_url('Penyewa/submit_reservation'); ?>" method="post">
	      				<div class="fields">
                  <div class="form-group">
		                <input type="text" id="nik" class="form-control" name="nik" required="required" placeholder="NIK">
		              </div>
                  <div class="form-group">
		                <input type="text" id="name" class="form-control" name="namaPenyewa" required="required" placeholder="Name">
		              </div>
                  <div class="form-group">
		                <textarea id="address" class="form-control " name="alamat" required="required" placeholder="Address"></textarea>
		              </div>
                  <div class="form-group">
		                <div class="select-wrap one-third">
	                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
	                    <select name="gender" id="gender" class="form-control" required="required">
                        <option value="" disabled selected>Gender</option>
	                    	<option value="L">Male</option>
	                    	<option value="P">Female</option>
	                    </select>
	                  </div>
		              </div>
                  <div class="form-group">
		                <input type="email" id="email" class="form-control" name="email" required="required" placeholder="Email">
		              </div>
                  <div class="form-group">
		                <input type="tel" id="no_telp" class="form-control" name="no_telp" required="required" placeholder="Phone Number">
		              </div>
		              <div class="form-group">
		                <input type="text" id="tglCheckin" name="tglCheckin" class="form-control checkin_date" placeholder="Check In Date">
		              </div>
		              <div class="form-group">
		                <input type="text" id="tglCheckout" name="tglCheckout" class="form-control checkout_date" placeholder="Check Out Date">
		              </div>
                  <div class="form-group">
		                <input disabled type="text" id="namaCottage" class="form-control" name="namaCottage" required="required" value="<?= $val->namaCottage; ?>">
		              </div>
									<!-- <div class="form-group">
										<input type="text" value="1" name="status">
									</div> -->
									<div class="form-group">
									<input type="text" value="<?= $stok->idCottage ?>" name="idCottage" hidden/>
									</div>

									<!-- <?= var_dump($stok) ?> -->

		              <div class="form-group">
		                <input type="submit" value="Booking" class="btn btn-primary py-3 px-5">
		              </div>
		            </div>
	            </form>
	      		</div>
            <div class="sidebar-box ftco-animate">
              <h3>Vantage Villa</h3>
              <p>A Vantage Villa is a charming and picturesque dwelling nestled amidst the rugged beauty of mountainous terrain. These cozy retreats are characterized by their serene and idyllic settings, offering a tranquil escape from the hustle and bustle of urban life.</p>
            </div>
            <div class="sidebar-box ftco-animate">
              <h3>Tag Cloud</h3>
              <div class="tagcloud">
                <a href="#" class="tag-cloud-link">dish</a>
                <a href="#" class="tag-cloud-link">menu</a>
                <a href="#" class="tag-cloud-link">food</a>
                <a href="#" class="tag-cloud-link">sweet</a>
                <a href="#" class="tag-cloud-link">tasty</a>
                <a href="#" class="tag-cloud-link">delicious</a>
                <a href="#" class="tag-cloud-link">desserts</a>
                <a href="#" class="tag-cloud-link">drinks</a>
              </div>
            </div>

            
          </div>
        </div>
      </div>
    </section> <!-- .section -->


    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Gallery</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="<?php echo base_url('assets1/images/gal1.jpg');?>" class="insta-img image-popup" style="background-image: url(<?php echo base_url('assets1/images/gal1.jpg');?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="<?php echo base_url('assets1/images/gal2.jpg');?>" class="insta-img image-popup" style="background-image: url(<?php echo base_url('assets1/images/gal2.jpg');?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="<?php echo base_url('assets1/images/gal3.jpg');?>" class="insta-img image-popup" style="background-image: url(<?php echo base_url('assets1/images/gal3.jpg');?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="<?php echo base_url('assets1/images/gal4.jpg');?>" class="insta-img image-popup" style="background-image: url(<?php echo base_url('assets1/images/gal4.jpg');?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="<?php echo base_url('assets1/images/gal5.jpg');?>" class="insta-img image-popup" style="background-image: url(<?php echo base_url('assets1/images/gal5.jpg');?>);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
