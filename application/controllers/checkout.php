<?php

/*
 * This is Checkout Controller Class.Which hold all kind of checkout process functions and properties
 * @Author Md. Iqbal Hossain
 * @ Created Date :18-11-2015
 * @Modification Date: 8-12-15
 */
session_start();

class Checkout extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model', 'w_model', TRUE);
        $this->load->model('super_admin_model', 'sa_model', true);
        $this->load->model('checkout_model', 'ck_model', true);
    }

    public function customer_area() {
        $data = array();
        $data['title'] = 'Checkout';
        $data['image_gallery'] = $this->sa_model->select_image_gallery_product();
        $data['all_category'] = $this->sa_model->select_all_category_info();
        $data['maincontent'] = $this->load->view('customer_area', $data, true);
        $this->load->view('master', $data);
    }

    public function check_customer_login() {

        $customer_email_address = $this->input->post('customer_email_address', true);
        $password = $this->input->post('password', true);
        $result = $this->ck_model->select_customer($customer_email_address, $password);

        if ($result) {
            $sdata = array();
            $sdata['customer_id'] = $result->customer_id;
            $sdata['login_status'] = true;
            $this->session->set_userdata($sdata);
            redirect('cart/show_cart');
        } else {
            $sdata = array();
            $sdata['exception'] = "User ID or Password invalid.";
            $this->session->set_userdata($sdata);
            redirect("welcome/login");
        }
    }

    public function check_customer_login1() {

        $customer_email_address = $this->input->post('customer_email_address', true);
        $password = $this->input->post('password', true);
        $result = $this->ck_model->select_customer($customer_email_address, $password);

        if ($result) {
            $sdata = array();
            $sdata['customer_id'] = $result->customer_id;
            $sdata['login_status'] = true;
            $this->session->set_userdata($sdata);
            redirect('cart/show_cart');
        } else {
            $sdata = array();
            $sdata['exception'] = "User ID or Password invalid.";
            $this->session->set_userdata($sdata);
            redirect("checkout/customer_area");
        }
    }

    public function save_customer() {
        $data = array();
        $data['first_name'] = $this->input->post('first_name', true);
        $data['last_name'] = $this->input->post('last_name', true);
        $data['customer_email_address'] = $this->input->post('customer_email_address', true);
        $data['password'] = md5($this->input->post('password', true));
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['address'] = $this->input->post('address', true);
        $data['company_name'] = $this->input->post('company_name', true);
        $data['city'] = $this->input->post('city', true);
        $data['country'] = $this->input->post('country', true);
        $data['zip_code'] = $this->input->post('zip_code', true);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $customer_id = $this->ck_model->save_customer_info($data);

        /*
         * ------------- Start Send Customer Registration COnfirmation Email-------
         */
        $mdata = array();
        $mdata['from_address'] = 'iqbl.cse2015@gmail.com';
        $mdata['admin_full_name'] = 'Our Ecommerce01';
        $mdata['to_address'] = $data['customer_email_address'];
        $mdata['subject'] = 'Registration Successfull- www.ecommercesite.com';
        $mdata['last_name'] = $data['last_name'];
        $mdata['password'] = $this->input->post('password', true);
        $this->mailer_model->sendeEmail($mdata, 'successfull_registration');
        /*
         * ------------- End Send Customer Registration COnfirmation Email-------
         */

        $sdata = array();
        $sdata['customer_id'] = $customer_id;
        $sdata['login_status'] = true;
        // $sdata['message'] = "successfull registration Please Login !";
        $this->session->set_userdata($sdata);
        redirect('cart/show_cart');
    }

    public function shipping_same_as_billing() {
        $customer_id = $this->session->userdata('customer_id');
        $customer_info = $this->ck_model->select_customer_by_customer_id($customer_id);
//        echo '<pre>';
//        print_r($customer_info);
//        exit();
        $data['customer_id'] = $customer_info->customer_id;
        $data['full_name'] = $customer_info->first_name . ' ' . $customer_info->last_name;
        $data['email_address'] = $customer_info->customer_email_address;
        $data['mobile_no'] = $customer_info->mobile_no;
        $data['zip_code'] = $customer_info->zip_code;
        $data['full_address'] = $customer_info->address;
        $data['city'] = $customer_info->city;
        $data['country'] = $customer_info->country;
        $shipping_id = $this->ck_model->save_shipping_info($data);
        $sdata = array();
        $sdata['shipping_id'] = $shipping_id;
        $this->session->set_userdata($sdata);
        redirect('cart/show_cart');
    }

    public function shipping_save_as_billing_info() {//$this->input->post('first_name', true);
        $customer_id = $this->session->userdata('customer_id');
        $customer_info = $this->ck_model->select_customer_by_customer_id($customer_id);
        $data['customer_id'] = $customer_info->customer_id;
        $data['full_name'] = $this->input->post('full_name', true);
        $data['email_address'] = $this->input->post('email_address', TRUE);
        $data['mobile_no'] = $this->input->post('mobile_no', TRUE);
        $data['thana'] = $this->input->post('thana', TRUE);
        $data['post'] = $this->input->post('post', TRUE);
        $data['zip_code'] = $this->input->post('zip_code', TRUE);
        $data['full_address'] = $this->input->post('full_address', TRUE);
        $data['city'] = $this->input->post('city', TRUE);
        $data['country'] = $this->input->post('country', TRUE);
//        echo '<pre>';
//        print_r($data);
//        exit();
        $shipping_id = $this->ck_model->save_shipping_info($data);
        $sdata = array();
        $sdata['shipping_id'] = $shipping_id;
        $this->session->set_userdata($sdata);
        redirect('cart/show_cart');
    }

   public function confirm_order() {
        $data = array();
        $sdata = array();
        $payment_type = $this->input->post('payment_type');
        if ($payment_type == 'cash_on_delevary') {
            $data['payment_status'] = 'Pending';
            $data['payment_type'] = $payment_type;
            $payment_id = $this->ck_model->save_payment_info($data);
            $sdata['payment_id'] = $payment_id;
            $this->session->set_userdata($sdata);
            // echo 'Save Payment Info Successfully !';
            $this->ck_model->save_order_info();
            //$this->cart->destroy();
            $cdata=$this->cart->contents();
            foreach($cdata as $vdata)
            {
                $prduct_id=$vdata['id'];
                $reorder_level=  $this->ck_model->check_reorder_level($prduct_id);
                if($reorder_level)
                {
                    /*
                     * ---Send Email to Marchent for update stk this product
                     */
                    
                    /*
                     * ---End
                     */
                }
            }
            $data['all_category'] = $this->w_model->select_all_published_category();
            $this->cart->destroy();
            $this->session->unset_userdata('shipping_id');
            $data['maincontent'] = $this->load->view('order_successfull', $data, true);
            $this->load->view('master', $data);
        }
        if ($payment_type == 'paypal') {
            $data['payment_status'] = 'Pending';
            $data['payment_type'] = $payment_type;
            $payment_id = $this->ck_model->save_payment_info($data);
            $sdata['payment_id'] = $payment_id;
            $this->session->set_userdata($sdata);
            // echo 'Save Payment Info Successfully !';
            $this->ck_model->save_order_info();
            //$this->cart->destroy();
            $customer_id=$this->session->userdata('customer_id');
            $payment_id=$this->session->userdata('payment_id');
            $shipping_id=$this->session->userdata('shipping_id');
            $mdata = array();
            $mdata['from_address'] = 'iqbal@yahoo.com';
            $mdata['admin_full_name'] = 'iferiwala.com';
            $mdata['to_address'] = $this->session->userdata('customer_email_address');;
            $mdata['subject'] = 'Order Successfully received- www.iferiwala.com';
            $mdata['billing_info'] = $this->ck_model->billing_info_by_customer_id($customer_id);
            $mdata['payment_info'] = $this->ck_model->payment_info_by_payment_id($payment_id);
            $mdata['shipping_info'] = $this->ck_model->shipping_info_by_shipping_id($shipping_id);
            $mdata['order_details'] = $this->cart->contents();
            $mdata['password'] = $this->input->post('password', true);
            $this->mailer_model->sendeEmail($mdata, 'successfull_order');
            
            $this->load->view('htmlWebsiteStandardPayment');
            
        }
        /*
         * ------------- Start Send Customer Order COnfirmation Email-------
         */
        $customer_id=$this->session->userdata('customer_id');
        $payment_id=$this->session->userdata('payment_id');
        $shipping_id=$this->session->userdata('shipping_id');
        $mdata = array();
        $mdata['from_address'] = 'iqbal@yahoo.com';
        $mdata['admin_full_name'] = 'iferiwala.com';
        $mdata['to_address'] = $this->session->userdata('customer_email_address');;
        $mdata['subject'] = 'Order Successfully received- iferiwala.com';
        $mdata['billing_info'] = $this->ck_model->billing_info_by_customer_id($customer_id);
        $mdata['payment_info'] = $this->ck_model->payment_info_by_payment_id($payment_id);
        $mdata['shipping_info'] = $this->ck_model->shipping_info_by_shipping_id($shipping_id);
        $mdata['order_details'] = $this->cart->contents();
        $mdata['password'] = $this->input->post('password', true);
        $this->mailer_model->sendeEmail($mdata, 'successfull_order');
        /*
         * ------------- End Send Customer Order COnfirmation Email-------
         */
        $this->cart->destroy();
    }


   
    public function logout() {
        session_destroy();
        $this->session->unset_userdata('customer_id');
        $data = array();
        $data['message'] = "Are you successfully Logout !";
        $this->session->set_userdata($data);
        redirect('welcome/login');
    }

    /*
     * @function name ajax_email_check
     * @author : Md. Iqbal Hossain
     * @created date: 18-11-2015
     * @parameters : $email_addresss
     * This function responcetest to the client side 
     */

    public function ajax_email_check($email_address) {
        $result = $this->ck_model->select_customer_by_email_address($email_address);
        if ($result) {
            echo "Alredy Registured !";
        } else {
            echo "Avilable";
        }
    }

}
