<div class="kode-subheader subheader-height">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Checkout</h1>
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
</div><br><br>
<div class="kode-content">
    <div class="container">
        <div class="row" style="margin-top: 50px; margin-bottom: 50px;">
            <div class="col-md-4" style="border: 1px solid #0ff; border-radius: 15px; margin-right: 10px; padding-top: 20px;">
                <center>
                    <h2> Please Login</h2>
                    (If You Register Customer)
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
			
          
                </center>
                <div class="modal-body">
                    <form class="kode-loginform" method="post"  action="<?php echo base_url(); ?>checkout/check_customer_login1">
                        <p><span>User Email</span> <input type="text" name="customer_email_address" placeholder="User Email" required="required"></p>
                        <p><span>Password</span> <input type="password" name="password" placeholder="Password" required="required"></p>
                        <p><label><input type="checkbox"><span>Remember Me</span></label></p>
                        <div class="kd-button">
                            <button type="reset" class="btn btn-primary">Reset Button</button>
                            <button type="submit" class="btn btn-primary">Submit Button</button>
                        </div>
                    </form>
                </div>  
            </div>
            <div class="col-md-7" style="border: 1px solid #0ff; border-radius: 15px; padding-top: 20px; padding-bottom: 50px;">
                <center> <h2>BILLING DETAILS</h2></center>
                <form action="<?php echo base_url(); ?>checkout/save_customer" method="post" onsubmit="return validateStandard(this);">

                    <div class="col-md-6">

                        <div class="form-group">
                            <label>First Name</label> 
                            <input id="first_name" class="form-control" placeholder="First Name" name="first_name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label> 
                            <input id="last_name" class="form-control" placeholder="Last Name" name="last_name">
                        </div>

                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" id="customer_email_address" class="form-control" placeholder="Email Address" name="customer_email_address" onblur="makerequest('<?php echo base_url(); ?>checkout/ajax_email_check', 'res');" required="1" err="Enter Correct Email Address" regexp="JSVAL_RX_EMAIL" name="customer_email_address" /><span id="res"></span>
                        </div>
                        <div class="form-group">
                            <label>Conform Email Address</label>
                            <input type="email" class="form-control" required="1"  err="Confirm Email Address mustbe same as Email Address" equals="email" placeholder="Conform Email" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" id="password" class="form-control" placeholder="Password" name="password" required="required">
                        </div>
                         <div class="form-group">
                            <label>Mobile</label> 
                            <input type="text" id="mobile" class="form-control" placeholder="mobile" name="mobile" required="required">
                        </div>



                    </div><!-- /.col -->
                    <div class="col-md-6">
                       
                        <div class="form-group">
                            <label>Address</label>
                            <textarea class="form-control" rows="4" id="address" name="address"></textarea>
                        </div>
                        <div class="form-group">
                            <label>City</label> <input type="text" id="city"
                                                       class="form-control" placeholder="city" name="city" required="required">
                        </div>
                        <div class="form-group">
                            <label for="Select">Country</label>
                            <select class="form-control"  id="country"  name="country" required="required">
                                <option value="">Select Country......</option>
                                <script type="text/javascript">
                                    printCountryOptions();
                                </script>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Zip Code</label> 
                            <input type="text" id="zip_code" class="form-control" placeholder="Zip code" name="zip_code" required="required">
                        </div>
                        <div class="kd-button">
                            <button type="reset" class="btn btn-primary">Reset Button</button>
                            <button type="submit" class="btn btn-primary">Submit Button</button>
                        </div>
                    </div><!-- /.col -->
                   
                  
                        
                     
                </form>
            </div>
        </div>
    </div>

</div>


<script type="text/javascript">
<!--
//Create a boolean variable to check for a valid Internet Explorer instance.
    var xmlhttp = false;
//Check if we are using IE.
    try {
//If the Javascript version is greater than 5.
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer.");
    } catch (e) {
//If not, then use the older active x object.
        try {
//If we are using Internet Explorer.
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//alert ("You are using Microsoft Internet Explorer");
        } catch (E) {
//Else we must be using a non-IE browser.
            xmlhttp = false;
        }
    }
//If we are using a non-IE browser, create a javascript instance of the object.
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
//alert ("You are not using Microsoft Internet Explorer");
    }

    function makerequest(serverPage, objID)
    {
        //var obj = document.getElementById(objID);
        //alert(1);
        var email_address = document.getElementById('email_address').value;
        serverPage = serverPage + '/' + email_address;
        alert(serverPage);
        xmlhttp.open("GET", serverPage);
        xmlhttp.onreadystatechange = function ()
        {
            //alert(xmlhttp.readyState);
            //alert(xmlhttp.status);
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
            {
                document.getElementById(objID).innerHTML = xmlhttp.responseText;
                //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                if (xmlhttp.responseText == 'Alredy Registured !')
                {
                    document.getElementById('r_button').disabled = true;
                }
                else {
                    document.getElementById('r_button').disabled = false;
                }
            }
        }
        xmlhttp.send(null);
    }
</script>

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


