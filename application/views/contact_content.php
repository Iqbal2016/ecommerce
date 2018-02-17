 <div class="kode-subheader subheader-height">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <h1>Contract Detail</h1>
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
    <section class="kode-pagesection margin-bottom-40">
          <div class="container">
            <div class="row">
    

    <section id="contact-page" style="border: 1px solid #0ff; padding: 5px; border-radius: 20px;">
        <div class="container">
            <div class="center">        
                <center> <h2>Drop Your Message</h2></center>
                        <center> <p class="lead">
                    
                       <!--------------------------start MASSAGE----------------------------------->
                                                  <?php
                                                        $message = $this->session->userdata('message');
                                                        //echo '------'.$message;
                                                        if ($message) { //echo '------1';
                                                            ?>
                                                            <h4 class="alert_success"><?php echo $message; ?></h4>


                                                            <?php
                                                            $this->session->unset_userdata('message');
                                                        }
                                                        ?>                       
			<!----------------------------end massage------------------------------------------------>
			
                    </p></center>
            </div> <br>
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="<?php echo base_url(); ?>contract_admin/save_contract">
                    <div class="col-sm-5 col-sm-offset-1">
                        <div class="form-group">
                            <label>Name *</label>
                            <input type="text" name="name" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="number" name="number" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Company Name</label>
                            <input type="text" name="company" class="form-control">
                        </div>                        
                    </div>
                    <div class="col-sm-5">
                        <div class="form-group">
                            <label>Subject *</label>
                            <input type="text" name="subject" class="form-control" required="required">
                        </div>
                        <div class="form-group">
                            <label>Message *</label>
                            <textarea name="message" id="message" required="required" class="form-control" rows="6"></textarea>
                        </div>                        
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                        </div>
                    </div>
                </form> 
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
    <section id="contact-info">
        <div class="center">                
            <center><h2>How to Reach Us?</h2></center>
            <center> <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p></center>
        </div><br>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=JoomShaper,+Dhaka,+Dhaka+Division,+Bangladesh&amp;aq=0&amp;oq=joomshaper&amp;sll=37.0625,-95.677068&amp;sspn=42.766543,80.332031&amp;ie=UTF8&amp;hq=JoomShaper,&amp;hnear=Dhaka,+Dhaka+Division,+Bangladesh&amp;ll=23.73854,90.385504&amp;spn=0.001515,0.002452&amp;t=m&amp;z=14&amp;iwloc=A&amp;cid=1073661719450182870&amp;output=embed"></iframe>
                        </div>
                    </div>

                   
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->
     </div>
        </section>
        <!--// Page Content //-->		

      </div>
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