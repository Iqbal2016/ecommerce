<h4 style="color:green;">
    <?php
    $cat_deleted = $this->session->userdata('message');

    if (isset($cat_deleted)) {
        echo $cat_deleted;
        $this->session->unset_userdata('message');
    }
    ?>
</h4>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Data tables</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Table With Full Features</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Product ID</th>
                                    <th>Product Name</th>
                                    <th>Product Quantity</th>
                                    <th>Image</th>
                                    <th>Reorder Level</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($reorder_level_product as $v_rol_product) {
                                    ?>
                                    <tr> 
                                        <td><?php echo $v_rol_product->product_id; ?></td> 
                                        <td><?php echo $v_rol_product->product_name; ?></td> 
                                        <td><?php echo $v_rol_product->product_quantity; ?></td>
                                        <td><img src="<?php echo $v_rol_product->product_image; ?>" alt="image" width="30" height="30" /></td> 
                                        <td><?php echo $v_rol_product->product_reorder_level; ?></td>
                                        <td>
                                             <a class="btn btn-success glyphicon glyphicon-edit" href="<?php echo base_url(); ?>super_admin/edit_product/<?php echo $v_rol_product->product_id ?>"></a>
                                             <a class="btn btn-danger glyphicon glyphicon-remove" href="<?php echo base_url(); ?>super_admin/delete_product/<?php echo $v_rol_product->product_id ?>" onclick="return confirm('Are you sure want to delete');"></a>
                                        
                                          
                                        </td> 
                                    </tr> 
                                <?php } ?>

                            </tbody>
                                
                        </table>
                         <div class="pagination_1">
                             <center> <?php echo $this->pagination->create_links(); ?></center>
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
