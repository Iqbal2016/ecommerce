<?php

class Checkout_Model extends CI_Model {

    //put your code here
    public function save_customer_info($data) {
        $this->db->insert('tbl_customer', $data);
        $customer_id = $this->db->insert_id();
        return $customer_id;
    }

    public function select_customer_by_email_address($email_address) {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_email_address', $email_address);

        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function select_customer_by_customer_id($customer_id) {
        $sql = "SELECT * FROM tbl_customer WHERE customer_id='$customer_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }

    public function save_shipping_info($data) {
        $this->db->insert('tbl_shipping_info', $data);
        $shipping_id = $this->db->insert_id();
        return $shipping_id;
    }

    public function select_customer($email_address, $password) {
        $this->db->select('*');
        $this->db->from('tbl_customer');
        $this->db->where('customer_email_address', $email_address);
        $this->db->where('password', md5($password));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
    public function save_payment_info($data) {
        $this->db->insert('tbl_payment', $data);
        $payment_id = $this->db->insert_id();
        return $payment_id;
    }

    public function save_order_info() {
        $data = array();
        $oddata = array();
        $data['customer_id'] = $this->session->userdata('customer_id');
        $data['shipping_id'] = $this->session->userdata('shipping_id');
        $data['payment_id'] = $this->session->userdata('payment_id');
        $data['order_total'] = $this->cart->total();
        $this->db->insert('tbl_order', $data);
        $oddata['order_id'] = $this->db->insert_id();

        $cdata = $this->cart->contents();
        /* echo '<pre>';
          print_r($cdata);
          exit(); */
        foreach ($cdata as $v_cdata) {
            $oddata['product_id'] = $v_cdata['id'];
            $oddata['product_price'] = $v_cdata['price'];
            $oddata['product_name'] = $v_cdata['name'];
            $oddata['product_sales_quantity'] = $v_cdata['qty'];
            $this->db->insert('tbl_order_details', $oddata);
        }
        $sql = "update tbl_product, tbl_order_details
                set tbl_product.product_quantity = tbl_product.product_quantity - tbl_order_details.product_sales_quantity 
                where tbl_product.product_id = tbl_order_details.product_id
                and tbl_order_details.order_id = '$oddata[order_id]' ";
        $this->db->query($sql);
        //echo 'Update Successfully!';
    }

    public function billing_info_by_customer_id($customer_id) {
        $sql = "SELECT * FROM tbl_customer WHERE customer_id='$customer_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }

    public function payment_info_by_payment_id($payment_id) {
        $sql = "SELECT * FROM tbl_payment WHERE payment_id='$payment_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
   }

    public function shipping_info_by_shipping_id($shipping_id) {
        $sql = "SELECT * FROM tbl_shipping_info WHERE shipping_id='$shipping_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }

    public function check_reorder_level($prduct_id) {
        $sql = "SELECT * FROM tbl_product WHERE product_quantity <= product_reorder_level AND product_id='$prduct_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }

}

?>