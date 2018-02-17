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
          <form action="<?php echo base_url(); ?>super_admin/update_category" method="post" >
            <div class="box-header with-border">
                <h3 class="box-title">Add Category</h3>
                
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
                            <label>Category Name</label>
                            <input type="hidden" name="category_id" value="<?php echo $category_info->category_id; ?>">
                            <input id="category_name" class="form-control" placeholder="Category Name" name="category_name" value="<?php echo $category_info->category_name; ?>" required="required">
                        </div>
                        <div class="form-group">
                            <label>Publication Status</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="publication_status" id="publication_status" value="1" checked>Published
                                </label>
                            </div>                                          

                            <div class="radio">
                                <label>
                                    <input type="radio" name="publication_status" id="publication_status" value="0">Un Published
                                </label>
                            </div>
                        </div>



                    </div><!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category Description</label>
                            <textarea class="form-control" rows="3" id="category_description" name="category_description"><?php echo $category_info->category_description; ?></textarea>
                        </div>

                    </div><!-- /.col -->
                   
                </div><!-- /.row -->
            </div><!-- /.box-body -->
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Update Button</button>
                <button type="reset" class="btn btn-primary">Reset Button</button>
            </div>
           </form>
        </div>
    </section><!-- /.content -->
</div>