	<section class="ftco-section bg-light">
    	<div class="container">
				<div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2 class="mb-4">Our Cottages</h2>
          </div>
        </div>    		
		    	<div class="row">
					<?php foreach($cottage as $val){?>
		    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
		    				<div class="room">
		    					<a href="<?php echo site_url('Home/detail_cottage/'.$val->idCottage); ?>" class="img d-flex justify-content-center align-items-center" style="background-image: url(<?php echo base_url('assets/admin/images/'.$val->gambar1);?>);">
		    						<div class="icon d-flex justify-content-center align-items-center">
		    							<span class="icon-search2"></span>
		    						</div>
		    					</a>
		    					<div class="text p-3 text-center">
		    						<h3 class="mb-3"><?php echo $val->namaCottage;?></a></h3>
		    						<p><span class="price mr-2">Rp <?php echo number_format ($val->harga,0,',','.');?></span> <span class="per">per night</span></p>
		    						<ul class="list">
		    							<li><span>Max:</span> 3 Persons</li>
		    							<li><span>Size:</span> 24 sqm</li>
		    							<li><span>View:</span> Mountains View</li>
		    							<li><span>Bed:</span> 1 King Bed</li>
		    						</ul>
		    						<hr>
		    						<p class="pt-1"><a href="<?php echo site_url('Home/detail_cottage/'.$val->idCottage); ?>" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
		    					</div>
		    				</div>
		    			</div>
						<?php } ?>
		    		</div>
		    	</div>
    	</div>
    </section>