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
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Invoice #842393</title>
    </head>
    <body bgcolor="#efefef">


        <table id="wrapper" cellspacing="1" width="800" cellpadding="10" bgcolor="#B7B7B7" align="center">
            <tbody>
                <tr>
                    <td bgcolor="#B7B7B7">

                        <table width="100%">
                            <tbody>
                                <tr>
                                    <td width="100%">

                                        <p><h1><center>Book Store</center></h1></p>
                                    </td>
                                   
                                </tr>
                            </tbody>
                        </table>

                        <br>


                        <table width="100%" id="invoicetoptables" cellspacing="0"><tbody><tr>
                                    <td colspan="2" id="invoicecontent" style="border:1px solid #cccccc">

                                        <table width="100%" height="100" style=" background: #B7B7B7" cellspacing="0" cellpadding="10" id="invoicetoptables">
                                            <tbody>
                                                <tr>

                                                    <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc; padding-left: 10px;">
                                                        <strong>Invoice To</strong><br>
                                                        Book Store<br><?php echo $billing_info->first_name; ?><br>
                                                        <?php echo $billing_info->address; ?>,
                                                        <?php echo $billing_info->city ?>, <?php echo $billing_info->zip_code ?><br>
                                                        <?php echo $billing_info->country ?>

                                                    </td>

                                                    <td width="50%" valign="top" id="invoicecontent" style="border:1px solid #cccccc; padding-left: 10px;">

                                                        <strong>Ship To</strong><br>
                                                        Book Store<br><?php echo $shipping_info->full_name; ?><br>
                                                        <?php echo $shipping_info->full_address; ?>,
                                                        <?php echo $shipping_info->city ?>,<?php echo $shipping_info->zip_code ?><br>
                                                        <?php echo $shipping_info->country ?>

                                                    </td>
                                                </tr>
                                            </tbody></table>

                                    </td>
                                </tr></tbody></table>

                        <p style="padding: 15px;"><strong>Invoice #00055<?php echo $order_info->order_id ?></strong><br>
                            Invoice Date: 12/11/2013<br>
                            Due Date: 12/21/2013</p>

                        <table width="100%" id="invoicetoptables" cellspacing="0">
                            <tbody>
                                <tr>
                                    <td id="invoiceitemsheading" align="center" width="70%" style="border:1px solid #cccccc;border-bottom:0px;"><strong>Description</strong>
                                    </td>
                                    <td id="invoiceitemsheading" align="center" width="30%" style="border:1px solid #cccccc;border-left:0px;border-bottom:0px;">
                                        <strong>Amount</strong>
                                    </td>
                                </tr>
                                <tr bgcolor="#ffffff">
                                    <?php
                                    foreach ($order_details as $o_value) {
                                        ?>
                                    <tr><td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right">Product Name:&nbsp;</div></td><td id="invoiceitemsheading" align="center" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><strong><?php echo $o_value->product_name; ?></strong></td></tr>
                                    <tr>
                                        <td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right">Product Price:&nbsp;</div></td><td id="invoiceitemsheading" align="center" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><strong>BDT <?php
                                                echo $o_value->product_price;
                                                ;
                                                ?></strong>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                <tr><td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right">Sub Total:&nbsp;</div></td><td id="invoiceitemsheading" align="center" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><strong>BDT <?php echo $order_info->order_total; ?></strong></td></tr>
                                <tr><td id="invoiceitemsheading" style="border:1px solid #cccccc;border-bottom:0px;"><div align="right">Credit:&nbsp;</div></td><td id="invoiceitemsheading" align="center" style="border:1px solid #cccccc;border-bottom:0px;border-left:0px;"><strong>BDT 0.00</strong></td></tr>
                                <tr><td id="invoiceitemsheading" style="border:1px solid #cccccc;"><div align="right">Total:&nbsp;</div></td><td id="invoiceitemsheading" align="center" style="border:1px solid #cccccc;border-left:0px;"><strong>BDT <?php echo $order_info->order_total; ?></strong></td></tr>
                            </tbody>
                        </table>


                        <p style="padding: 15px;"><strong>Transactions</strong></p>

                        <table style="width: 95%" cellspacing="0" id="invoiceitemstable" align="center"><tbody>
                                <tr><td id="invoiceitemsheading" align="center" width="30%" style="border:1px solid #cccccc"><strong>Transaction Date</strong></td><td id="invoiceitemsheading" align="center" width="25%" style="border:1px solid #cccccc;border-left:0px;"><strong>Gateway</strong></td><td id="invoiceitemsheading" align="center" width="25%" style="border:1px solid #cccccc;border-left:0px;"><strong>Transaction ID</strong></td><td id="invoiceitemsheading" align="center" width="20%" style="border:1px solid #cccccc;border-left:0px;"><strong>Amount</strong></td></tr>
                        <!--        <table cellspacing="0" id="invoiceitemstable" align="center"><tbody><tr><td id="invoiceitemsheading" align="center" width="70%" style="border:1px solid #cccccc;border-bottom:0px;"><strong>Description</strong></td><td id="invoiceitemsheading" align="center" width="30%" style="border:1px solid #cccccc;border-left:0px;border-bottom:0px;"><strong>Amount</strong></td></tr>-->
                                <tr><td id="invoiceitemsheading" width="30%" style="border:1px solid #cccccc;border-top:0px;" colspan="3"><div align="right"><strong>Payment Type:&nbsp;</strong></div></td><td id="invoiceitemsheading" align="center" width="20%" style="border:1px solid #cccccc;border-left:0px;border-top:0px;"><strong><?php echo $payment_info->payment_type ?></strong></td></tr>
                                <tr><td id="invoiceitemsheading" width="30%" style="border:1px solid #cccccc;border-top:0px;" colspan="3"><div align="right"><strong>Payment Date And time:&nbsp;</strong></div></td><td id="invoiceitemsheading" align="center" width="20%" style="border:1px solid #cccccc;border-left:0px;border-top:0px;"><strong><?php echo $payment_info->payment_date_time ?></strong></td></tr>

                            </tbody></table>
                        <br><br>
                        <p style="padding-left: 30px;"><strong>Book Store</strong><br>
                            384/3 East Rampura,TV Tower Road,<br/>
                            Dhaka - 1219<br>
                            Bangladesh</p>

                        <br>

                    </td>
                </tr>
            </tbody>
        </table>


        <p align="center"><a href="#">Â« Back to Client Area</a> | <a href="#">Download</a> | <a href="javascript:window.close()">Close Window</a></p>

</div>
        <script style="display: none; " id="hiddenlpsubmitdiv"></script><script>try {
                for (var lastpass_iter = 0; lastpass_iter < document.forms.length; lastpass_iter++) {
                    var lastpass_f = document.forms[lastpass_iter];
                    if (typeof (lastpass_f.lpsubmitorig2) == "undefined") {
                        lastpass_f.lpsubmitorig2 = lastpass_f.submit;
                        lastpass_f.submit = function () {
                            var form = this;
                            var customEvent = document.createEvent("Event");
                            customEvent.initEvent("lpCustomEvent", true, true);
                            var d = document.getElementById("hiddenlpsubmitdiv");
                            for (var i = 0; i < document.forms.length; i++) {
                                if (document.forms[i] == form) {
                                    d.innerText = i;
                                }
                            }
                            d.dispatchEvent(customEvent);
                            form.lpsubmitorig2();
                        }
                    }
                }
            } catch (e) {
            }</script></body></html>