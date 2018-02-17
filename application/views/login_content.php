
<div class="kode-subheader subheader-height">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Login</h1>
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




<!--// Main Content //-->
<div class="kode-content">

    <!--// Page Content //-->
    <section class="kode-pagesection">
        <div class="container">
            <div class="row">

                <div class="kode-pagecontent col-md-8">

                    <div class="kode-blog-list kode-fullwidth-blog">
                        <ul class="row">
                            <li class="col-md-6"></li>

                            <li class="col-md-6" style="border: 1px solid#0ff; border-radius: 10px; margin-bottom: 30px;">
			<!--------------------------start MASSAGE----------------------------------->
                                       <h4 style="color:red;">
                            <?php 
                                  $exception=$this->session->userdata('exception');
                                  if(isset($exception))
                                  {
                                      echo $exception;
                                      $this->session->unset_userdata('exception');
                                  }
                            ?>

                        </h4>
                        <h4 style="color:green;">
                            <?php 
                                  $message=$this->session->userdata('message');
                                  if(isset($message))
                                  {
                                      echo $message;
                                      $this->session->unset_userdata('message');
                                  }
                            ?>

                        </h4>
			<!----------------------------end massage------------------------------------------------>
			
          
                                 <div class="modal-body">
                                    <form class="kode-loginform" method="post"  action="<?php echo base_url();?>checkout/check_customer_login">
                                        <p><span>User Email</span> <input type="text" name="customer_email_address" placeholder="User Email" required="required"></p>
                                      <p><span>Password</span> <input type="password" name="password" placeholder="Password"required="required" ></p>
                                      <p><label><input type="checkbox"><span>Remember Me</span></label></p>
                                      <p class="kode-submit"><a href="#">Lost Your Password</a> <input class="thbg-colortwo" type="submit" value="Sign in"></p>
                                    </form>
                                  </div>
                            </li>                
                        </ul>
                    </div>

                </div>

                <aside class="kode-pagesidebar col-md-4">
                    
                </aside>

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