<!--// Sub Header //-->
<div class="kode-subheader subheader-height">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>Shop</h1>
            </div>
            <div class="col-md-6">
                <ul class="kode-breadcrumb">
                    <li><a href="#">Home</a></li>
                       <?php
                        foreach ($all_category as $v_category) {
                           ?>
                           <li><a href="<?php echo base_url(); ?>welcome/category_product/<?php echo $v_category->category_id; ?>"><?php echo $v_category->category_name; ?></a></li>
                           <?php
                            }
                     ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--// Sub Header //-->
<div class="kode-content">

    <!--// Page Content //-->
    <section class="kode-pagesection" style=" padding: 0px 0px 18px 0px; ">
        <div class="container">
            <div class="row" style="height: 300px;">   

                <h2>Your Order Successfully Placed !</h2>
                <h4>Check Your Email For Details</h4>

            </div>
        </div>
    </section>
    <!--// Page Content //-->

</div>