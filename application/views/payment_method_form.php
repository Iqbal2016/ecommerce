<h2>Select Your payment Method</h2>
<form action="<?php echo base_url();?>checkout/confirm_Order" method="post">
    <input type="radio" name="payment_type" checked="checked" value="cash_on_delevary"/> Cash On Dalevary<br/>
    <input type="radio" name="payment_type" value="paypal"/> Paypal Payment<br/><br><br>
    <input class="btn btn-success" type="submit" value="Confirm Order"/>
</form>