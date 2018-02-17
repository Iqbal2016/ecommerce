<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Data Tables
            <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
            <form action="<?php echo base_url();?>super_admin/search_order" method="post">
            <input type="text" name="search_text">
            <input type="submit" name="sbtn" value="Search">
            </form>
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
                                    <th>Order ID</th>
                                    <th>Customer name</th>
                                    <th>Order Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php foreach ($all_orders as $v_order) { ?>
                                    <tr> 
                                        <td><?php echo $v_order->order_id; ?></td> 
                                        <td><?php echo $v_order->first_name . ' ' . $v_order->last_name; ?></td>            
                                        <td>BDT <?php echo $v_order->order_total; ?></td>            

                                        <td>
                                             
                                            <a class="btn btn-danger glyphicon glyphicon-remove" href="<?php echo base_url(); ?>super_admin/delete_order/<?php echo $v_order->order_id; ?>" onclick="return confirm('Are you sure want to delete');"></a>
                                            <a href="<?php echo base_url(); ?>super_admin/order_details/<?php echo $v_order->order_id; ?>" >Details</a>


                                        </td> 
                                    </tr>
                                <?php } ?>
                            </tbody>
                            
                        </table>
                       
                    </div><!-- /.box-body -->
                    <div class="pagination_1">
                             <center> <?php echo $this->pagination->create_links(); ?></center>
                        </div>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
