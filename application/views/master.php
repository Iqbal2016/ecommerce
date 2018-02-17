<?php
    $customer_id = $this->session->userdata('customer_id');
?>  
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from kodeforest.com/html/kickoff/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2015 13:09:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $title; ?></title>

    <!-- Css Files -->
    <link href="<?php echo base_url(); ?>temp/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/font-awesome.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/themetypo.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/style.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/widget.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/color.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/flexslider.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>temp/css/jquery.bxslider.css" rel="stylesheet">    
	<link href="<?php echo base_url(); ?>temp/css/prettyphoto.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>temp/css/responsive.css" rel="stylesheet">
     <script src="<?php echo base_url(); ?>temp/country.js"></script>
    
    <?php if ($customer_id != NULL) { ?>
           <h1 id="w_message"><?php //echo "Welcome ".$client_name.".";      ?></h1>
    <?php } ?>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <!--// Wrapper //-->
    <div class="kode-wrapper">
      <header id="mainheader" class="kode-header-absolute">

        <!--// TopBaar //-->
          <div class="kode-topbar">
		  <div class="container">
              <div class="row">
                <div class="col-md-6 kode_bg_white">
					<ul class="top_slider_bxslider">
<!--						<li><span class="kode-barinfo"><strong>Latest News : </strong> Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit,</span></li>
						<li><span class="kode-barinfo"><strong>Latest News : </strong> Lorem ipsum dolor sit amet, cons ecte tuer adipiscing elit,</span></li>
						<li><span class="kode-barinfo"><strong>Latest News : </strong> Welcome visitor you can Login or Create an Account</span></li>-->
					</ul>
				</div>
                <div class="col-md-6">
                  <ul class="kode-userinfo">
                      <li><a href="<?php echo base_url(); ?>cart/show_cart"><i class="fa fa-shopping-cart"></i> Cart (<?php echo $this->cart->total_items(); ?>)</a></li>
                    
                  </ul>
                </div>
              </div>
            </div>
          </div>
        <!--// TopBaar //-->
		
		<div class="header-8">
			<div class="container">
				<!--NAVIGATION START-->
				<div class="kode-navigation pull-left">
					<ul>
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
				<!--NAVIGATION END--> 
				<!--LOGO START-->	
				<div class="logo">
                                    <a href="<?php echo base_url(); ?>" class="logo"><img src="<?php echo base_url(); ?>temp/images/logo.png" alt=""></a>
				</div>
				<!--LOGO END-->	
				<!--NAVIGATION START-->
				<div class="kode-navigation">
                                         
                                    <ul> 
                                        <?php if ($customer_id != NULL) { ?>
                                        <li><a href="<?php echo base_url(); ?>checkout/logout">Logout</a>
                                         <?php } else { ?>
                                        <li><a href="<?php echo base_url(); ?>welcome/login">Login</a>
                                        <li><a href="<?php echo base_url(); ?>welcome/register">Register</a>
                                        <?php } ?>  
                                        <li class="last"><a href="<?php echo base_url(); ?>welcome/contact.html">contact</a></li>
			            </ul>
				</div>
				<!--NAVIGATION END-->  
				 <nav class="navbar navbar-default">
                    
                      <!-- Brand and toggle get grouped for better mobile display -->
                      <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div>

                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                          
                          		
			 <li><a href="<?php echo base_url(); ?>">Home</a></li>
                              <?php
                                foreach ($all_category as $v_category) {
                               ?>
                                <li><a href="<?php echo base_url(); ?>welcome/category_product/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                                   <?php
                                    }
                               ?>			
				 <?php if ($customer_id != NULL) { ?>
                                        <li><a href="<?php echo base_url(); ?>checkout/logout">Logout</a>
                                         <?php } else { ?>
                                        <li><a href="<?php echo base_url(); ?>welcome/login">Login</a>
                                        <li><a href="<?php echo base_url(); ?>welcome/register">Register</a>
                                        <?php } ?>  
                                        <li class="last"><a href="<?php echo base_url(); ?>welcome/contact.html">contact</a></li>
			            		
                         
                        </ul>
                      </div><!-- /.navbar-collapse -->

                  </nav>
			</div>
		</div>
      </header>
      <div class="kode-content">
          
         <?php echo $maincontent; ?>	

      </div>

    

      <div class="kode-bottom-footer">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p>©2015 iferiwala.com All Right Reserved</p>
            </div>
            <div class="col-md-6">
              <a href="#" id="kode-topbtn" class="thbg-colortwo"><i class="fa fa-angle-up"></i></a>
            </div>
          </div>
        </div>      </div>
<div class="clearfix clear"></div>
    </div>
    <!--// Wrapper //-->
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Login To Your Account</h4>
          </div>
          <div class="modal-body">
            <form class="kode-loginform" action="<?php echo base_url(); ?>checkout/check_customer_login" method="post">
                    <p><span> Email</span> <input type="text" name="customer_email_address" placeholder="Email"></p>
                    <p><span>Password</span> <input type="password" name="password" placeholder="Password"></p>
                    <p><label><input type="checkbox"><span>Remember Me</span></label></p>
                    <p class="kode-submit"><a href="#">Lost Your Password</a>
                    <input class="thbg-colortwo" type="submit" value="Sign in"></p>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModalTwo" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header thbg-color">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Register</h4>
          </div>
          <div class="modal-body">
               <form class="kode-loginform">
            <div class="col-md-12">
                <div class="col-md-6">
                   
                        <p><span>First Name</span> <input type="text" name="first_name" placeholder="First Name"></p>
                        <p><span>Last Name</span> <input type="text" name="last_name" placeholder="Last Name"></p>
                        <p><span>Email</span> <input type="text" name="customer_email_address" placeholder="Email"></p>
                        <p><span>Password</span> <input type="password" name="password" placeholder="Password"></p>
                        <p><span>Mobile</span> <input type="text" name="mobile" placeholder="mobile"></p>                    
                   
                </div>
                 <div class="col-md-6">
                    
                      <p><span>Address</span> <input type="text" name="address" placeholder="Address"></p>
                      <p><span>City</span> <input type="text" name="city" placeholder="City"></p>
                      <p><span>Country</span> <input type="text" name="country" placeholder="Country"></p>
                      <p><span>Company</span> <input type="text" name="country" placeholder="Country"></p>
                      <p><span>Zip Code</span> <input type="text" name="zip_code" placeholder="Zip Code"></p>                    
                   
                </div>
                
               </div>
                  <p><input class="thbg-colortwo" type="submit" value="Sign in"></p>
               </form>
          </div>
        </div>
      </div>
    </div>

    <!-- jQuery (necessary for JavaScript plugins) -->
    <script src="<?php echo base_url(); ?>temp/js/jquery.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/jquery.flexslider.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/jquery.countdown.js"></script>  
    <script src="<?php echo base_url(); ?>temp/js/waypoints-min.js"></script>
	<script src="<?php echo base_url(); ?>temp/js/jquery.bxslider.min.js"></script>
	<script src="<?php echo base_url(); ?>temp/js/bootstrap-progressbar.js"></script>
	<script src="<?php echo base_url(); ?>temp/js/jquery.accordion.js"></script>
	<script src="<?php echo base_url(); ?>temp/js/jquery.circlechart.js"></script>
	<script src="<?php echo base_url(); ?>temp/js/jquery.prettyphoto.js"></script>
	<script src="<?php echo base_url(); ?>temp/js/kode_pp.js"></script>
    <script src="<?php echo base_url(); ?>temp/js/functions.js"></script>

  </body>

<!-- Mirrored from kodeforest.com/html/kickoff/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 29 Oct 2015 13:10:53 GMT -->
</html>