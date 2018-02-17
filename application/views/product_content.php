<div class="kode-subheader subheader-height">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Shop Detail</h1>
            </div>
            <div class="col-md-6">
                 <ul class="kode-breadcrumb">
                      <li><a href="<?php echo base_url(); ?>">Home</a></li>
                     <?php
                        foreach ($all_category as $v_category) {
                           ?>
                           <li><a href="<?php echo base_url(); ?>welcome/category_product/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                           <?php
                            }
                     ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="kode-content">

        <!--// Page Content //-->
        <section class="kode-pagesection">
          <div class="container">
            <div class="row">

                <div class="kode-pagecontent col-md-12">
                  <div class="kode-images">
                  	<a href="#" class="shopmainthumb"><img src="<?php echo $product_details->product_image; ?>" alt=""></a>
                    <ul>
                      <li><a href="#"><img src="<?php echo $product_details->product_image; ?>" alt=""></a></li>
                      <li><a href="#"><img src="<?php echo $product_details->product_image; ?>" alt=""></a></li>
                      <li><a href="#"><img src="<?php echo $product_details->product_image; ?>" alt=""></a></li>
                    </ul>
                  </div>
                  <div class="kode-summery">

                    <div class="summery-title">
                        <h2><?php echo $product_details->product_name; ?></h2>
                      <div class="clearfix"></div>
                      <small>In stock</small>
                      <div class="kode-rating"><span class="rating-box" style="width:80%"></span></div>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                    <div class="priceinfo">
                      <h2>BDT : <?php echo $product_details->product_price; ?></h2>
                      <ul>
                        <li><span>Size</span>
                          <select>
                            <option>small</option>
                            <option>small</option>
                            <option>small</option>
                            <option>small</option>
                          </select>
                        </li>
                        <li><span>Color</span>
                          <select>
                            <option>Black</option>
                            <option>Red</option>
                            <option>Black</option>
                            <option>Red</option>
                          </select>
                        </li>
                      </ul>
                    </div>
                    <a href="<?php echo base_url(); ?>cart/add_to_cart/<?php echo $product_details->product_id; ?>" class="kode-modren-btn thbg-colortwo">Add To Cart</a>
                    <div class="shop-btn">
                      <a href="#" class="fa fa-heart"></a>
                      <a href="#" class="fa fa-share"></a>
                    </div>

                  </div>
                  <div class="kode-player-tabs shop-nav">

                    <!-- Nav tabs -->
                    <ul class="player-nav" role="tablist">
                      <li role="presentation" class="active"><a href="#hometwo" aria-controls="hometwo" role="tab" data-toggle="tab">Product Description</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="hometwo">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Curabitur pretium tincidunt lacus</p>
                        <p>Nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam.Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et</p>
                      </div>
                      
                    </div>

                  </div>

                  <div class="kode-shop-list">
                    <div class="kode-section-title"> <h2>Recent Product</h2> </div>

                    <ul class="row">
                        <?php
                        foreach ($recent_product as $r_product) {
                            ?>
                      <li class="col-md-3 col-sm-6">
                        <div class="kode-pro-inner">
                          <figure><a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $r_product->product_id; ?>"><img src="<?php echo $r_product->product_image; ?>" alt="" height="266"></a>
                            <figcaption>
                              <h4><a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $r_product->product_id; ?>"><?php echo $r_product->product_name; ?></a></h4>
                              <p class="kode-pro-cat"><a href="#"><?php echo $r_product->category_name; ?></a></p>
                            </figcaption>
                          </figure>
                          <div class="kode-pro-info">
                            <a href="<?php echo base_url(); ?>cart/add_to_cart/<?php echo $r_product->product_id; ?>" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                            <span> <?php echo $r_product->product_price; ?> $</span>
                          </div>
                        </div>
                      </li>
                       <?php } ?>
                      
                      
                      
                      
                    </ul>

                </div>

                </div>

              </div>
            </div>
        </section>
        <!--// Page Content //-->

      </div>

<!--// NewsLatter //-->
              <div class="kode-newslatter kode-bg-color" >
        <span class="kode-halfbg thbg-color"></span>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h3>Subscribe Our Monthly Newsletter</h3>
            </div>
            <div class="col-md-6">
              <form>
                <input type="text" placeholder="Your E-mail Adress" name="s" required>
                <label><input type="submit" value=""></label>
              </form>
            </div>
          </div>
        </div>
      </div>
	 <footer id="footer1" class="kode-parallax kode-dark-overlay kode-bg-pattern">
		<!--Footer Medium-->
		<div class="footer-medium">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="about-widget">
							<h3>About Kickoff</h3>
							<ul class="kode-form-list">
							  <li><i class="fa fa-home"></i> <p><strong>Address:</strong> Rampura, Dhaka - 1219</p></li>
							  <li><i class="fa fa-phone"></i> <p><strong>Phone:</strong> 01813084716</p></li>
							  <li><i class="fa fa-envelope-o"></i> <p><strong>Email:</strong> iqbal.cse2015@gmail.com</p></li>
							</ul>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="widget widget-flickr kode-gallery-pretty">
							<h3>Product Gallery</h3>
							<ul>    
                                                                 <?php
                                                                    foreach ($image_gallery as $i_gallery) {
                                                                        ?>
                                                            <li><a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $i_gallery->product_id; ?>"><img src="<?php echo $i_gallery->product_image; ?>" alt="" width="80" height="80"></a></li>
                                                                  <?php } ?>
                                                        </ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="contact-us-widget">
							<h3>Connect with us</h3>
							<p>Follow us to stay in the loop on what’s<br>
							Sed ut perspiciatis unde omnis iste natus<br> error sit Sed ut perspiciatis unde omnis iste<br> natus error sit</p>
							<ul class="social-links1">
								<li>
									<a href="#" class="tw-bg1"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#" class="fb-bg1"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#" class="youtube-bg1"><i class="fa fa-youtube"></i></a>
								</li>
								<li>
									<a href="#" class="linkedin-bg1"><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a href="#" class="tw-bg1"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#" class="fb-bg1"><i class="fa fa-facebook"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--Footer Medium End-->
	
    
      </footer>
      <!--// Contact Footer //-->
