
<center><h2 class="btn btn-success"><a href="<?php echo base_url() ?>checkout/shipping_same_as_billing">Shipping Same as Billing</a></h2><br><strong>or</strong> <h2>Add Shipping Address</h2></center>
<!--<div class="templatemo_content_table">
<center><h1><strong>Shipping Form</strong></h1></center>
<center>
<form action="<?php echo base_url(); ?>checkout/shipping_save_as_billing_info" method="post" onsubmit="return validateStandard(this);">
    <table>
        <tr>
            <td>Full Name</td>
            <td>:</td>
            <td><input type="text"name="full_name"  style="width:300px;"  /></td>
        </tr>
        <tr>
            <td>Email</td>
            <td>:</td>
            <td><input type="text" name="email_address" id="email_address" onblur="makerequest('<?php echo base_url(); ?>checkout/ajax_email_check', 'res');" required="1" err="Enter Correct Email Address" regexp="JSVAL_RX_EMAIL"  style="width:300px;"  /><span id="res"></span></td>
        </tr>
        <tr>
            <td>Mobile No.</td>
            <td>:</td>
            <td><input type="number" name="mobile_no"  style="width:300px;"  /></td>
        </tr>
        <tr>
            <td>Thana</td>
            <td>:</td>
            <td><input type="text" name="thana"  style="width:300px;"  /></td>
        </tr>
        <tr>
            <td>Post</td>
            <td>:</td>
            <td><input type="text" name="post"  style="width:300px;"  /></td>
        </tr>
        <tr>
            <td>Zip code</td>
            <td>:</td>
            <td><input type="text" name="zip_code"  style="width:300px;"  /></td>
        </tr>
        <tr>
            <td>Full Address</td>
            <td>:</td>
            <td><textarea name="full_address" style="background: #222222;" rows="10" cols="38" ></textarea></td>
        </tr>
        <tr>
            <td>City</td>
            <td>:</td>
            <td><input type="text" name="city"  style="width:300px;"  /></td>
        </tr>
        <tr>
            <td>Country</td>
            <td>:</td>
            <td>
                <select name="country" exclude=" " required="1">
                    <option value=" ">........................Select Country.........................</option>
                    <script type="text/javascript">
                        printCountryOptions();
                    </script>
                </select>
            </td>
        </tr><br/><br/>
        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="btn" value="Save Shipping info." style="width:100px; height:30px; text-align: center;"  /></td>
        </tr>
    </table>
</form>
</center>
</div>-->


<div class="kode-content">

        <!--// Page Content //-->
        <section class="kode-pagesection" style=" padding: 0px 0px 18px 0px; ">
          <div class="container">
            <div class="row">
                
        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <form action="<?php echo base_url(); ?>checkout/shipping_save_as_billing_info" method="post" onsubmit="return validateStandard(this);">
                
                 <div class="col-md-12"  style="border: 1px solid #0ff; padding: 50px 0; border-radius: 20px;">
                     
                     <div class="col-md-2"></div>
                        <div class="col-md-4">

                            <div class="form-group">
                                <label>Name</label> 
                                <input id="full_name" class="form-control" placeholder="Full Name" name="full_name">
                            </div>
                           <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" id="email_address" class="form-control" placeholder="Email Address" name="email_address" onblur="makerequest('<?php echo base_url();?>checkout/ajax_email_check','res');" required="1" err="Enter Correct Email Address" regexp="JSVAL_RX_EMAIL" name="customer_email_address" /><span id="res"></span>
                            </div>
                            
                             <div class="form-group">
                                <label>Mobile No</label> 
                                <input type="text" id="mobile_no" class="form-control" placeholder="mobile" name="mobile_no" required="required">
                            </div>
                            <div class="form-group">
                                <label>Thana</label> 
                                <input type="text" id="thana" class="form-control" placeholder="Thana" name="thana" required="required">
                            </div>
                             <div class="form-group">
                                <label>Post Office</label> 
                                <input type="text" id="post" class="form-control" placeholder="Post Office" name="post" required="required">
                            </div>
                            
                        </div><!-- /.col -->
                        <div class="col-md-4">
                            
                           
                            <div class="form-group">
                                <label>Zip Code</label> 
                                <input type="text" id="zip_code" class="form-control" placeholder="Zip code" name="zip_code" required="required">
                            </div>
                            <div class="form-group">
                                <label>Full Address</label>
                                <textarea class="form-control" rows="4" id="full_address" name="full_address"></textarea>
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
                            
                            
                        </div><!-- /.col -->
                         
                         <div class="col-md-12">
                             <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <button type="reset" class="btn btn-primary">Reset Button</button>
                                </div>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit Button</button>

                                </div>
                            </div>
               
               </div>
            </form>
        </div>
      </div>
          </div>
        </section>
        <!--// Page Content //-->

      </div>