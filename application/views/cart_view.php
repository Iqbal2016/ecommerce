<?php
$cdata = $this->cart->contents();
//echo '<pre>';
//print_r($cdata);
//exit();
?>
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
<div class="kode-content">

    <!--// Page Content //-->
    <section class="kode-pagesection" style=" padding: 0px 0px 18px 0px; ">
        <div class="container">
            <div class="row">
                <?php
                $cdata = $this->cart->contents();
                /* echo '<pre>';
                  print_r($cdata);
                  exit(); */
                ?>
                <center><h2 class="btn btn-success"><a href="<?php echo base_url(); ?>"><< Continue Shopping </a> </h2></center><br><br>
                <table cellpadding="6" cellspacing="10"  style="width:100%; background-color: white;color:black;" border="1">

                    <tr>
                        <th>QTY</th>
                        <th>Image</th>
                        <th>Item Name</th>
                        <th style="text-align:right">Item Price</th>
                        <th style="text-align:right">Sub-Total</th>
                    </tr>



                    <?php foreach ($cdata as $items): ?>



                        <tr>
                            <td>
                                <form action="<?php echo base_url(); ?>cart/update_cart" method="post">
                                    <input type="hidden" name="rowid" value="<?php echo $items['rowid']; ?>">
                                    <input type="text" name="qty" value="<?php echo $items['qty']; ?>" >
                                    <button class="btn btn-success" type="submit" name="btn" value="Update">Update</button>
                                    <a href="<?php echo base_url(); ?>cart/delete_item/<?php echo $items['rowid']; ?>">
                                         <input class="btn btn-danger" type="button" name="btn" value="Remove">
                                    </a>
                                </form>
                                
                            </td>
                            <td>
                                <img src="<?php echo $items['image']; ?>" width="30" height="35">
                            </td>
                            <td>
                                <?php echo $items['name']; ?>



                            </td>
                            <td style="text-align:right"><?php echo $this->cart->format_number($items['price']); ?></td>
                            <td style="text-align:right">BDT <?php echo $this->cart->format_number($items['subtotal']); ?></td>
                        </tr>



                    <?php endforeach; ?>

                    <tr>
                        <td colspan="2"> </td>
                        <td class="right"><strong>Total</strong></td>
                        <td class="right">BDT <?php echo $this->cart->format_number($this->cart->total()); ?></td>
                    </tr>

                </table><br><br>
                
                <center> <h2 class="btn btn-success"><a href="<?php echo base_url(); ?>checkout/customer_area">Checkout >></a></h2></center><br>
               <?php
                    $customer_id = $this->session->userdata('customer_id');
                    $shipping_id = $this->session->userdata('shipping_id');
                    if ($customer_id != NULL && $shipping_id == NULL) {
                        $this->load->view('shipping_info_form');
                    }
                    if ($customer_id != NULL && $shipping_id != NULL) {
                        $this->load->view('payment_method_form');
                    }
                    ?>
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
							  <li><i class="fa fa-home"></i> <p><strong>Address:</strong> 805 omnis iste natus error.</p></li>
							  <li><i class="fa fa-phone"></i> <p><strong>Phone:</strong> 111 8756 22  777 4456 112</p></li>
							  <li><i class="fa fa-envelope-o"></i> <p><strong>Email:</strong> Info@sportyleague.com</p></li>
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