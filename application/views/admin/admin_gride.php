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
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Email</th>
                                    <th>City</th>
                                    <th>Country</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                            foreach ($all_admin as $v_admin) {
                                ?>
                                <tr> 
                                    
                                    <td><?php echo $v_admin->admin_name; ?></td>
                                     <td><img src="<?php echo $v_admin->admin_images; ?>" alt="image" width="30" height="30" /></td> 
                                    <td><?php echo $v_admin->admin_email_address; ?></td>
                                    <td><?php echo $v_admin->city; ?></td>
                                    <td><?php echo $v_admin->country; ?></td> 
                                    <td>
                                        <a class="btn btn-success glyphicon glyphicon-edit" href="<?php echo base_url(); ?>admin_login/edit_admin/<?php echo $v_admin->admin_id; ?>"></a>
                                        <a class="btn btn-danger glyphicon glyphicon-remove" href="<?php echo base_url(); ?>super_admin/delete_category/<?php echo $v_admin->admin_id; ?>" onclick="return confirm('Are you sure want to delete');"></a>
                                        
                                    </td>
                                </tr> 
                            <?php } ?>
                              
                            </tbody>
                            
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
