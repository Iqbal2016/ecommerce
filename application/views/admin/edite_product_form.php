<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Update Form Elements
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
            <form action="<?php echo base_url(); ?>super_admin/update_product" method="post" enctype="multipart/form-data">
                <div class="box-header with-border">
                    <h3 class="box-title">Update Product</h3>

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
                                <input type="hidden" name="product_id" value="<?php echo $product_info->product_id; ?>">
                                <input id="product_name" class="form-control" placeholder="Product Name" name="product_name" value="<?php echo $product_info->product_name; ?>">
                            </div>
                            <div class="form-group">
                                <label>Product Author</label>
                                <input id="product_author" class="form-control" placeholder="Product Author" name="product_author" value="<?php echo $product_info->product_author; ?>">
                            </div>

                            <div class="form-group">
                                <label>Category Name</label>
                                <select class="form-control select2" name="category_id" style="width: 100%;">
                                    <option selected="selected" value="<?php echo $product_info->category_id; ?>">Select</option>
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
                                <input id="product_price" class="form-control" placeholder="Product Price" name="product_price" value="<?php echo $product_info->product_price; ?>">
                            </div>

                        </div><!-- /.col -->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Product Quantity</label>
                                <input id="product_quantity" class="form-control" placeholder="Product Quantity" name="product_quantity" value="<?php echo $product_info->product_quantity; ?>">
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

                        </div><!-- /.col -->
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Product Description</label>
                                <textarea class="form-control ckeditor" rows="3" id="product_description" name="product_description"><?php echo $product_info->product_description; ?></textarea>
                            </div>

                        </div>
                    </div><!-- /.row -->
                </div><!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Update Button</button>
                    <button type="reset" class="btn btn-primary">Reset Button</button>
                </div>
            </form>
        </div>
    </section>
</div>