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
                                    <th>Product Title</th>
                                    <th>Product Author</th>
                                    <th>Image</th>
                                    <th>Quantity</th>
                                    <th>Status</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($all_Product as $v_Product) {
                                    ?>
                                    <tr> 
                                        <td><?php echo $v_Product->product_id; ?></td> 
                                        <td><?php echo $v_Product->product_name; ?></td> 
                                        <td><?php echo $v_Product->product_author; ?></td>
                                        <td><img src="<?php echo $v_Product->product_image; ?>" alt="image" width="30" height="30" /></td> 
                                        <td><?php echo $v_Product->product_price; ?></td>
                                        <td>
                                            <?php
                                            if ($v_Product->publication_status == 1) {
                                                echo 'Published';
                                            } else {
                                                echo 'Unpublished';
                                            }
                                            ?>
                                        </td> 
                                        <td>
                                             <a class="btn btn-success glyphicon glyphicon-edit" href="<?php echo base_url(); ?>super_admin/edit_product/<?php echo $v_Product->product_id ?>"></a>
                                             <a class="btn btn-danger glyphicon glyphicon-remove" href="<?php echo base_url(); ?>super_admin/delete_product/<?php echo $v_Product->product_id ?>" onclick="return confirm('Are you sure want to delete');"></a>
                                        
                                           <?php
                                            if ($v_Product->publication_status == 1) {
                                                ?>
                                                <a href="<?php echo base_url(); ?>super_admin/unpublished_product/<?php echo $v_Product->product_id; ?>">Unpublished</a>

                                                <?php
                                            } else {
                                                ?>

                                                <a href="<?php echo base_url(); ?>super_admin/published_product/<?php echo $v_Product->product_id; ?>">Published</a>
                                                <?php
                                            }
                                            ?>
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
