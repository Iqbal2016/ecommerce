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
<!--                        <table id="example1" class="table table-bordered table-striped">-->
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">   
                            <thead>
                                <tr>
                                    <th>Category ID</th>
                                    <th>Category name</th>
                                    <th>Publication Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($all_category as $v_category) { ?>
                                <tr>
                                    <td><?php echo $v_category->category_id; ?></td> 
                                    <td><?php echo $v_category->category_name; ?></td> 
                                    <td>
                                        <?php
                                        if ($v_category->publication_status == 1) {
                                            echo 'Published';
                                        } else {
                                            echo 'Unpublished';
                                        }
                                        ?>
                                    </td> 
                               
                                    <td>
                                        <a class="btn btn-success glyphicon glyphicon-edit" href="<?php echo base_url(); ?>super_admin/edit_category/<?php echo $v_category->category_id; ?>"></a>
                                        <a class="btn btn-danger glyphicon glyphicon-remove" href="<?php echo base_url(); ?>super_admin/delete_category/<?php echo $v_category->category_id; ?>" onclick="return confirm('Are you sure want to delete');"></a>
                                        <a>
                                            <?php
                                                if ($v_category->publication_status == 1) {
                                                    ?>
                                                    <a href="<?php echo base_url(); ?>super_admin/unpublish_category/<?php echo $v_category->category_id; ?>">Unpublish</a>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <a href="<?php echo base_url(); ?>super_admin/publish_category/<?php echo $v_category->category_id; ?>">Publish</a>
                                                    <?php
                                                }
                                                ?>
                                        </a>
                                    </td>
                                </tr>
                                 <?php }?>
                              
                            </tbody>
                            
                        </table>
                        
                    </div><!-- /.box-body -->
                      <div class="pagination_1">
                            <center><?php echo $this->pagination->create_links(); ?></center><br>						       
                        			    
		    </div>
                </div><!-- /.box -->
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
</script>

 <script src="<?php echo base_url(); ?>admin/dataTables/jquery.dataTables.js"></script>
 <script src="<?php echo base_url(); ?>admin/dataTables/dataTables.bootstrap.js"></script>
   
