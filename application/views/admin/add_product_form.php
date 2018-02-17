<script type="text/javascript">
    function pr_level(level)
    {
       // alert(level);
       var pr_level=Number(level)/4;
       //alert(pr_level);
       document.getElementById('product_reorder_level').value=pr_level;
       
    }
</script>
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
            <form action="<?php echo base_url(); ?>super_admin/save_product" enctype="multipart/form-data" method="post">
                <div class="box-header with-border">
                    <h3 class="box-title">Add Product</h3>

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
                                <label>Product Name</label>
                                <input id="product_name" class="form-control" placeholder="Product Name" name="product_name" required="required">
                            </div>
                             <div class="form-group">
                                <label>Product Author</label>
                                <input id="product_author" class="form-control" placeholder="Product Author" name="product_author" required="required">
                            </div>
                           
                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="form-control select2" name="category_id" style="width: 100%;" required="required">
                                    <option selected="selected" value="">Select</option>
                                   <?php
                                    foreach ($all_category as $v_category) {
                                        ?>   
                                        <option value="<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></option>
                                    <?php }
                                    ?>
                                </select>
                              </div>
                             <div class="form-group">
                                <label>Product Price</label>
                                <input id="product_price" class="form-control" placeholder="Product Price" name="product_price" required="required">
                            </div>
                             <div class="form-group">
                                <label>Product Quantity</label>
                                <input id="product_quantity" class="form-control" placeholder="Product Quantity" name="product_quantity" onblur="pr_level(this.value);" required="required">
                            </div>
                             
                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product reorder level</label>
                                <input id="product_reorder_level" class="form-control" placeholder="Product reorder level" name="product_reorder_level" required="required">
                            </div>
                            <div class="form-group">
                                <label>Product Image</label>
                                <input type="file" name="product_image">
                            </div>
                            <div class="form-group">
                                <label> Status</label>
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
                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="form-control select2" name="category_name" style="width: 100%;" required="required">
                                    <option selected="selected" value="">Select</option>
                                   <?php
                                    foreach ($all_category as $v_category) {
                                        ?>   
                                        <option value="<?php echo $v_category->category_name; ?>"><?php echo $v_category->category_name; ?></option>
                                    <?php }
                                    ?>
                                </select>
                              </div>

                        </div><!-- /.col -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control ckeditor" rows="3" id="product_description" name="product_description"></textarea>
                            </div>
                            
                        </div>
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