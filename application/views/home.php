<section class="home-slider owl-carousel">
      <div class="slider-item" style="background-image:url(assets1/images/header1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Welcome To Vantage Villa</h1>
	            <h2>Villa &amp; Glamping</h2>
            </div>
          </div>
        </div>
        </div>
      </div>

      <div class="slider-item" style="background-image:url(assets1/images/thumb2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-12 ftco-animate text-center">
          	<div class="text mb-5 pb-3">
	            <h1 class="mb-3">Enjoy The Cottage Experience</h1>
	            <h2>Join With Us</h2>
            </div>
          </div>
        </div>
        </div>
      </div>
    </section>

    <section class="ftco-booking">
    	<div class="container">
    		<div class="row">
    			<div class="col-lg-12">
    				<form action="<?php echo site_url('Home/detail_cottage/'.$cottage[0]->idCottage); ?>" method="post" class="booking-form">
	        		<div class="row">
	        			<div class="col-md-3 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
				    					<label for="#">Check-in Date</label>
				    					<input type="text" class="form-control checkin_date" placeholder="Check-in date">
			    					</div>
			    				</div>
	        			</div>
	        			<div class="col-md-3 d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
				    					<label for="#">Check-out Date</label>
				    					<input type="text" class="form-control checkout_date" placeholder="Check-out date">
			    				</div>
			    				</div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Room</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control">
								<?php foreach($cottage as $val){?>
			                    	<option value=""><?php echo $val->namaCottage; ?></option>
									<?php } ?>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              	</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group p-4 align-self-stretch d-flex align-items-end">
	        					<div class="wrap">
			      					<label for="#">Customer</label>
			      					<div class="form-field">
			        					<div class="select-wrap">
			                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
			                    <select name="" id="" class="form-control">
			                    	<option value="">1 Adult</option>
			                      <option value="">2 Adult</option>
			                      <option value="">3 Adult</option>
			                      <option value="">4 Adult</option>
			                      <option value="">5 Adult</option>
			                      <option value="">6 Adult</option>
			                    </select>
			                  </div>
				              </div>
				            </div>
		              </div>
	        			</div>
	        			<div class="col-md d-flex">
	        				<div class="form-group d-flex align-self-stretch">
			              <input type="submit" value="Check Availability" class="btn btn-primary py-3 px-4 align-self-stretch">
			            </div>
	        			</div>
	        		</div>
	        	</form>
	    		</div>
    		</div>
    	</div>
    </section>


    <section class="ftco-section ftc-no-pb ftc-no-pt">
			<div class="container">
				<div class="row">
					<div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(assets1/images/thumbnail.jpg);">
						<a href="<?php echo base_url('assets1/images/vid_aboutus.mp4');?>" class="icon popup-vimeo d-flex justify-content-center align-items-center">
							<span class="icon-play"></span>
						</a>
					</div>
					<div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
	          <div class="heading-section heading-section-wo-line pt-md-5 pl-md-5 mb-5">
	          	<div class="ml-md-0">
		          	<span class="subheading">Welcome to Vantage Villa</span>
		            <h2 class="mb-4">Welcome To Our Cottage</h2>
	            </div>
	          </div>
	          <div class="pb-md-5">
							<p>A Vantage Villa is a charming and picturesque dwelling nestled amidst the rugged beauty of mountainous terrain. These cozy retreats are characterized by their serene and idyllic settings, offering a tranquil escape from the hustle and bustle of urban life.</p>
							<p>A Vantage Villa offers a haven of peace and serenity in the heart of nature's beauty. It's a place where one can escape the stresses of daily life and immerse themselves in the majesty of the mountains while enjoying the comforts of a charming and inviting retreat.</p>
							<ul class="ftco-social d-flex">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-reception-bell"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">25/7 Front Desk</h3>
                <p>Front desk is an area or part of the villa that functions as a central point of service to guests. The front desk is often the first location accessed by guests upon arrival at the villa.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-serving-dish"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Restaurant Bar</h3>
                <p>The restaurant bar concept creates a relaxed and social atmosphere, where guests can enjoy delicious dishes while enjoying their favorite drinks.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-3 d-flex align-sel Searchf-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-car"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Transfer Services</h3>
                <p>This service generally involves the use of a private vehicle, such as a car or van, along with a driver or coxswain whose job it is to take passengers from their starting point to their desired destination.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services py-4 d-block text-center">
              <div class="d-flex justify-content-center">
              	<div class="icon d-flex align-items-center justify-content-center">
              		<span class="flaticon-spa"></span>
              	</div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Spa Suites</h3>
                <p>Spa suites generally include a comfortable sleeping area with luxurious bathroom facilities equipped with a hydrotherapy bath, jacuzzi, or other spa facilities.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

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
    						<h3 class="mb-3"><?php echo $val->namaCottage;?></h3>
    						<p><span class="price mr-2">Rp <?php echo number_format ($val->harga,0,',','.');?></span> <span class="per">per night</span></p>
    						<hr>
    						<p class="pt-1"><a href="<?php echo site_url('Home/detail_cottage/'.$val->idCottage); ?>" class="btn-custom">View Room Details <span class="icon-long-arrow-right"></span></a></p>
    					</div>
    				</div>
    			</div>
				<?php } ?>
    		</div>
    	</div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(assets1/images/bg_1.jpg);">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-10">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="2500">0</strong>
		                <span>Happy Guests</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="60">0</strong>
		                <span>Cottages</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Staffs</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="100">0</strong>
		                <span>Destination</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8 ftco-animate">
          	<div class="row ftco-animate">
		          <div class="col-md-12">
		            <div class="carousel-testimony owl-carousel ftco-owl">
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(assets1/images/man.png)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">Amazing food and great atmosphere, nise service from the staff, you can get the strawberry picking and nice bungalow for stay in, praying room also provide neat and clean, good job for the management, keep it up. Definitely worth a comeback.</p>
		                    <p class="name">Arif Helwindono</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(assets1/images/girl.png)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">Nice place to staycation, enjoy the cold climate, morning with view, having great time with family and friends.</p>
		                    <p class="name">Elizabeth S.</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              <div class="item">
		                <div class="testimony-wrap py-4 pb-5">
		                  <div class="user-img mb-4" style="background-image: url(assets1/images/woman.png)">
		                    <span class="quote d-flex align-items-center justify-content-center">
		                      <i class="icon-quote-left"></i>
		                    </span>
		                  </div>
		                  <div class="text text-center">
		                    <p class="mb-4">Nice stay. Good place. Good food. I have stayed here many times. Very recommended.</p>
		                    <p class="name">Jennifer Viola</p>
		                    <span class="position">Guests</span>
		                  </div>
		                </div>
		              </div>
		              
		            </div>
		          </div>
		        </div>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 heading-section text-center ftco-animate">
            <h2>Destination</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="https://kelloggsnyc.com/candi-cetho/" class="block-20" style="background-image: url('assets1/images/cetho.png');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3">The beautiful view of the green mountainous backdrop typical of tropical forests and the beautiful atmosphere and majestic historical heritage buildings will make visitors who come feel an unusual sensation.</h3>
                <div class="meta mb-3">
                  <div>Opening Hours : 07.00 - 17.00 WIB</div><br>
                  <div>Ticket price : Rp 7.500</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="https://dolanyok.com/telaga-sarangan/" class="block-20" style="background-image: url('assets1/images/sarangan.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3">The most exciting activity area is of course in the lake area where you can do lots of activities, one of which is going around the lake using various water rides such as water tricycles, water bikes and even boats.</h3>
                <div class="meta mb-3">
				  <div>Opening Hours : 24 Hours</div><br>
                  <div>Ticket price : Rp 10.000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="https://tripjogja.co.id/air-terjun-jumog/" class="block-20" style="background-image: url('assets1/images/jumog.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3">At this waterfall, you can usually enjoy the beauty of the waterfall as well as the beauty of the hills and trees around it. You can also eat food from eating places and enjoy them on the edge of the waterfall.</h3>
                <div class="meta mb-3">
				  <div>Opening Hours : 07.00 - 17.00 WIB</div><br>
                  <div>Ticket price : Rp 15.000 - Rp 20.000</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="https://www.cekpremi.com/blog/jalur-pendakian-gunung-lawu/" class="block-20" style="background-image: url('assets1/images/lawu.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3">Apart from that, Mount Lawu also has beautiful natural charm. For example, you can watch the beautiful sunset and sunrise from this mountain. Forests and hills are also the attraction of this mountain.</h3>
                <div class="meta mb-3">
					<div>Opening Hours : 24 Hours</div><br>
                  <div>Ticket price : Rp 20.000</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="instagram">
      <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Gallery</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <a href="assets1/images/gal1.jpg" class="insta-img image-popup" style="background-image: url(assets1/images/gal1.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="assets1/images/gal2.jpg" class="insta-img image-popup" style="background-image: url(assets1/images/gal2.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="assets1/images/gal3.jpg" class="insta-img image-popup" style="background-image: url(assets1/images/gal3.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="assets1/images/gal4.jpg" class="insta-img image-popup" style="background-image: url(assets1/images/gal4.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <a href="assets1/images/gal5.jpg" class="insta-img image-popup" style="background-image: url(assets1/images/gal5.jpg);">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
