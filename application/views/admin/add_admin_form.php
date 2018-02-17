<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Advanced Form Elements
            <small>Preview</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Advanced Elements</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <form action="<?php echo base_url(); ?>super_admin/save_admin" method="post" enctype="multipart/form-data">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Admin</h3>

                    <h4 style="color:green;">
                        <?php
                        $message = $this->session->userdata('message');

                        if (isset($message)) {
                            echo $message;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </h4>

                    <div class="box-tools pull-right">
                        <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body">
                    <div class="row">

                        <div class="col-md-6">

                            <div class="form-group">
                                <label>Name</label> 
                                <input id="admin_name" class="form-control" placeholder="Admin Name" name="admin_name" required="required">
                            </div>

                            <div class="form-group">
                                <label>Email Address</label> <input type="email" id="admin_email_address"
                                                                    class="form-control" placeholder="Email Address" name="admin_email_address" required="required">
                            </div>
                            <div class="form-group">
                                <label>Password</label> <input type="password" id="admin_password"
                                                               class="form-control" placeholder="Password" name="admin_password" required="required">
                            </div>
                            <div class="form-group">
                                <label>Phone</label> <input type="text" id="phone"
                                                            class="form-control" placeholder="phone" name="phone" required="required">
                            </div>



                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Image</label> <input type="file" id="admin_images" name="admin_images" required="required">
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" rows="2" id="blog_description" name="Address"></textarea>
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

                    </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Submit Button</button>
                    <button type="reset" class="btn btn-primary">Reset Button</button>
                </div>
            </form>
        </div>
    </section><!-- /.content -->
</div>