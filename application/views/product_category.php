<!--// Sub Header //-->
<div class="kode-subheader subheader-height">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Shop</h1>
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
<!--// Sub Header //-->

    

      <!--// Main Content //-->
      <div class="kode-content">

        <!--// Page Content //-->
        <section class="kode-pagesection" style=" padding: 0px 0px 18px 0px; ">
          <div class="container">
            <div class="row">

              <div class="col-md-12">
                <div class="kode-shop-list">

                  <ul class="row">             
                  <?php
                        foreach ($all_product as $v_product) {
                            ?>
                     <li class="col-md-3 col-sm-6">
                      <div class="kode-pro-inner">
                          <figure><a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_product->product_id; ?>"><img src="<?php echo $v_product->product_image; ?>" alt="" height="266"></a>
                          <figcaption>
                            <h5><a href="<?php echo base_url(); ?>welcome/product_details/<?php echo $v_product->product_id; ?>"><?php echo $v_product->product_name; ?></a></h5>
                            <p class="kode-pro-cat"><a href="#">Categories</a></p>
                          </figcaption>
                        </figure>
                        <div class="kode-pro-info">
                          <a href="<?php echo base_url(); ?>cart/add_to_cart/<?php echo $v_product->product_id; ?>" class="add_to_cart"><i class="fa fa-shopping-cart"></i> Add To Cart</a>
                          <span>$ <?php echo $v_product->product_price; ?></span>
                        </div>
                      </div>
                    </li>
                     <?php } ?>
                    
                  </ul>

                </div>
                <!--// Pagination //-->
                <div class="pagination">
                  <a href="#"><i class="fa fa-angle-double-left"></i></a>
                  <a href="#">1</a>
                  <a href="#">2</a>
                  <span>3</span>
                  <a href="#">4</a>
                  <a href="#"><i class="fa fa-angle-double-right"></i></a>
                </div>
                <!--// Pagination //-->
              </div>
              
            </div>
          </div>
        </section>
        <!--// Page Content //-->

      </div>
      <!--// Main Content //-->
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