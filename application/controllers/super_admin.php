<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Super_Admin extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model', 'sa_model', true);
        $this->load->model('welcome_model', 'w_model', TRUE);
        $admin_id = $this->session->userdata('admin_id');
        //echo '-----'.$admin_id;
        if ($admin_id == null) {
            redirect('admin_login', 'refresh');
        }
    }

    public function index() {
        $data = array();
        $data['title']="admin";
        $data['adminmaincontent'] = $this->load->view('admin/admin_home_content', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function category_form() {
        $data = array();
        $data['title']="category";
        $data['adminmaincontent'] = $this->load->view('admin/add_category_form', '', TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->sa_model->save_category_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Category Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/category_form');
    }

    public function all_category() {
        $data = array();
        $data['title'] = "View category";
        //---------------------------
        $this->load->library('pagination');
        $config['base_url'] = base_url() .'super_admin/all_category/';
        $config['total_rows'] = $this->db->count_all('tbl_category');
        $config['per_page'] = '2';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);
        //-------------------------
        $data['all_category'] = $this->sa_model->select_all_category_info($config['per_page'], $this->uri->segment(3));
        $data['adminmaincontent'] = $this->load->view('admin/category_gride', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function delete_category($category_id) {
        $this->sa_model->delete_category_info_by_category_id($category_id);
        redirect('super_admin/all_category');
    }

    public function edit_category($category_id) {
        $data = array();
         $data['title'] = "Edit category";
        $data['category_info'] = $this->sa_model->select_category_info_by_category_id($category_id);
        $data['adminmaincontent'] = $this->load->view('admin/edite_category_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_category() {
        $data = array();
        $category_id = $this->input->post('category_id', true);
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->sa_model->update_category_info($data, $category_id);
        $sdata = array();
        $sdata['message'] = 'Update Category Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_category/' . $category_id);
    }

     public function unpublish_category($category_id) {
        $this->sa_model->unpublished_category_info($category_id);
        redirect("super_admin/all_category");
    }

    public function publish_category($category_id) {
        $this->sa_model->published_category_info($category_id);
        redirect("super_admin/all_category");
    }

    public function add_blog() {
        $data = array();
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['adminmaincontent'] = $this->load->view('admin/add_blog_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_blog() {
        $data = array();
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['blog_short_description'] = $this->input->post('blog_short_description', true);
        $data['blog_description'] = $this->input->post('blog_description', true);
        $data['author_name'] = $this->input->post('author_name', true);
        $data['author_email'] = $this->input->post('author_email', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->sa_model->save_blog_info($data);
        $sdata = array();
        $sdata['message'] = 'Save blog Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_blog');
    }

    public function all_blog() {
        $data = array();
        //$data['all_category'] = $this->sa_model->select_all_category_info();
        $data['all_blog'] = $this->sa_model->select_all_blog_info();
        $data['adminmaincontent'] = $this->load->view('admin/blog_gride', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function delete_blog($blog_id) {
        $this->sa_model->delete_blog_info_by_blog_id($blog_id);
        redirect('super_admin/all_blog');
    }
    public function edit_blog($blog_id) {
        $data = array();
        //$data['all_category'] = $this->sa_model->select_all_category_info();
        $data['blog_info'] = $this->sa_model->select_blog_info_by_blog_id($blog_id);
        $data['adminmaincontent'] = $this->load->view('admin/edite_blog_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_blog() {
        $data = array();
        $blog_id = $this->input->post('blog_id', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['blog_title'] = $this->input->post('blog_title', true);
        $data['author_name'] = $this->input->post('author_name', true);
        $data['author_email'] = $this->input->post('author_email', true);
        $data['blog_description'] = $this->input->post('blog_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->sa_model->update_blog_info($data, $blog_id);
        $sdata = array();
        $sdata['message'] = "Updated Blog Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_blog/' . $blog_id);
    }
     public function unpublished_blog($blog_id) {
        $this->sa_model->unpublished_blog_info($blog_id);
        redirect("super_admin/all_blog");
    }
     public function published_blog($blog_id) {
        $this->sa_model->published_blog_info($blog_id);
        redirect("super_admin/all_blog");
    }

    public function add_product() {
        $data = array();
        $data['title'] = "add product";
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['adminmaincontent'] = $this->load->view('admin/add_product_form', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_product() {
        $data = array();
        /* -----------Upload Start--------------- */
        $config['upload_path'] = 'images/product_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            //echo '<pre>';
            //print_r($error);
        } else {
            $fdata = $this->upload->data();
            //echo '<pre>';
            //print_r($fdata);
            $data['product_image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            //echo $data['product_image'];
        }
        /* -----------Upload End--------------- */
        //exit();
        $data['product_name'] = $this->input->post('product_name', true);
        $data['product_author'] = $this->input->post('product_author', true);
        $data['category_id'] = $this->input->post('category_id', true); 
        $data['category_name'] = $this->input->post('category_name', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
        $data['product_reorder_level'] = $this->input->post('product_reorder_level', true);
        $data['product_description'] = $this->input->post('product_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
//        echo '<pre>';
//        print_r($data);
//        exit(); 
        $this->sa_model->save_product_info($data);
        $sdata = array();
        $sdata['message'] = "Saved product Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_product');
    }
    public function all_product() {
        $data = array();
        //$data['all_category'] = $this->sa_model->select_all_category_info();
        $data['all_product'] = $this->sa_model->select_all_product_info();
        $data['adminmaincontent'] = $this->load->view('admin/blog_gride', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function view_product() {
        $data = array();
        $data['title']="View Product";
        /*------------------Start pagination-----------------------------*/
        $this->load->library('pagination');
        $config['base_url'] = base_url() .'super_admin/view_product/';
        $config['total_rows'] = $this->db->count_all('tbl_product');
        $config['per_page'] = '6';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);
        /*------------------End pagination-----------------------------*/
       // $data['all_category'] = $this->sa_model->select_all_category_info();
        $data['all_Product'] = $this->sa_model->select_all_product_info($config['per_page'], $this->uri->segment(3));
        $data['adminmaincontent'] = $this->load->view('admin/view_product', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function delete_product($product_id) {
        $this->sa_model->delete_product_info_by_product_id($product_id);
        redirect('super_admin/view_product');
    }

    public function edit_product($product_id) {
        $data = array();
        $data['title']="Edite Product";
        $data['all_category'] = $this->sa_model->select_all_category_info();
        $data['product_info'] = $this->sa_model->select_product_info_by_product_id($product_id);
        $data['adminmaincontent'] = $this->load->view('admin/edite_product_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function update_product() {
        $data = array();
        $product_id = $this->input->post('product_id', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['product_name'] = $this->input->post('product_name', true);
        $data['product_author'] = $this->input->post('product_author', true);
        $data['product_description'] = $this->input->post('product_description', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
        /* -----------Upload Start--------------- */
        $config['upload_path'] = 'images/product_images/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '10000';
        $config['max_width'] = '1024';
        $config['max_height'] = '768';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('product_image')) {
            $error = $this->upload->display_errors();
            //echo '<pre>';
            //print_r($error);
        } else {
            $fdata = $this->upload->data();
            //echo '<pre>';
            //print_r($fdata);
            $data['product_image'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            //echo $data['product_image'];
        }
        /* -----------Upload End--------------- */
        $category_id = $this->input->post('category_id', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->sa_model->update_product_info($data, $product_id);
        $sdata = array();
        $sdata['message'] = "Updated Product Successfully";
        $this->session->set_userdata($sdata);
        redirect('super_admin/edit_product/' .$product_id);
    }
     public function unpublished_product($product_id) {
        $this->sa_model->unpublished_product_info($product_id);
        redirect("super_admin/view_product");
    }
     public function published_product($product_id) {
        $this->sa_model->published_product_info($product_id);
        redirect("super_admin/view_product");
    }
   public function view_order(){
        $data = array();
        $data['title'] = "View Orders";
        /*------------------Start pagination-----------------------------*/
        $this->load->library('pagination');
        $config['base_url'] = base_url() .'super_admin/view_order/';
        $config['total_rows'] = $this->db->count_all('tbl_order as tbl_customer');
        $config['per_page'] = '3';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);
        /*------------------End pagination-----------------------------*/
        //$data['all_category'] = $this->sa_model->select_all_category_info();
        $data['all_orders'] = $this->sa_model->select_all_orders($config['per_page'], $this->uri->segment(3));
        $data['adminmaincontent'] = $this->load->view('admin/view_orders', $data, true);
        $this->load->view('admin/admin_master', $data); 
    }
    public function delete_order($order_id)
    {
        $this->sa_model->delete_order_by_order_id($order_id);
        redirect('super_admin/view_order');
    }
   public function order_details($order_id)
    {
        $data = array();
        $data['title'] ="Order Details";
        $data['order_info']=$this->sa_model->select_order_by_order_id($order_id);
        $data['billing_info']=$this->sa_model->select_customer_info_by_customer_id($data['order_info']->customer_id);
        $data['shipping_info']=$this->sa_model->select_shipping_info_by_shipping_id($data['order_info']->shipping_id);
        $data['payment_info']=$this->sa_model->select_payment_info_by_payment_id($data['order_info']->payment_id);
        $data['order_details']=$this->sa_model->select_order_details_by_order_id($order_id);
        //$data['all_orders'] = $this->sa_model->select_all_orders();
       
         /*
         * Start Create PDF
         */
//        $this->load->helper('dompdf');
//        $view_file=$this->load->view('admin/order_details', $data, true);
//        $file_name=pdf_create($view_file, 'Invoice');
//        echo $file_name;
        /*
         * End PDF
         */
        
        $data['adminmaincontent'] = $this->load->view('admin/order_details', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
    public function search_order()
    {  
        $data['title'] = "Search order";
        $search_text=$this->input->post('search_text');
        $data['all_orders'] = $this->sa_model->search_order($search_text);
        $data['adminmaincontent'] = $this->load->view('admin/view_orders', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function view_piechart()
    {
        $data=array();
        $data['title'] = "Reports";
        $data['adminmaincontent'] = $this->load->view('admin/PieChartTest', $data, true);
        $this->load->view('admin/admin_master', $data);
    }
     public function stk_manager()
    {
        $data = array();
        $data['title'] = "Stk manager";
        $data['reorder_level_product'] = $this->sa_model->select_under_reorder_level_product();
        $data['adminmaincontent'] = $this->load->view('admin/stk_grid', $data, true);
        $this->load->view('admin/admin_master', $data); 
    }  
    public function add_admin() {
        $data = array();
        $data['title'] = "Add Admin";
       // $data['all_category'] = $this->w_model->select_all_published_category();
        $data['adminmaincontent'] = $this->load->view('admin/add_admin_form', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function save_admin() {
        $data = array();

        $config ['upload_path'] = 'images/admin_images/';
        $config ['allowed_types'] = 'gif|jpg|png';
        $config ['max_size'] = '10000';
        $config ['max_width'] = '1024';
        $config ['max_height'] = '768';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('admin_images')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();
            $data ['admin_images'] = base_url() . $config ['upload_path'] . $fdata ['file_name'];
           
        }
        /* -----------Upload End--------------- */
        $data ['admin_name'] = $this->input->post('admin_name', true);
        $data ['admin_email_address'] = $this->input->post('admin_email_address', true);
        $data ['admin_password'] = md5($this->input->post('admin_password', TRUE));
        $data ['phone'] = $this->input->post('phone', TRUE);
        $data ['Address'] = $this->input->post('Address');
        $data ['city'] = $this->input->post('city');
        $data ['country'] = $this->input->post('country');
        $this->sa_model->save_admin_info($data);
        $sdata = array();
        $sdata ['message'] = 'Save Admin Successfully !';
        $this->session->set_userdata($sdata);
        redirect('super_admin/add_admin');
    }

    public function all_admin() {
        $data = array();
        $data['title']="View Admin";
         /*------------------Start pagination-----------------------------*/
        $this->load->library('pagination');
        $config['base_url'] = base_url() .'super_admin/all_admin/';
        $config['total_rows'] = $this->db->count_all('tbl_admin');
        $config['per_page'] = '2';
        $config['full_tag_open'] = '<p>';
        $config['full_tag_close'] = '</p>';
        $this->pagination->initialize($config);
        /*------------------End pagination-----------------------------*/
        $data ['all_admin'] = $this->sa_model->select_all_admin_info($config['per_page'], $this->uri->segment(3));
        $data ['adminmaincontent'] = $this->load->view('admin/admin_gride', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }

    public function logout() {
        session_destroy();
        $this->session->unset_userdata('admin_id');
        $data = array();
        $data['message'] = "Are you successfully Logout !";
        $this->session->set_userdata($data);
        redirect('admin_login');
    }

}
