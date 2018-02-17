<?php

class Super_Admin_Model extends CI_Model {

    //put your code here
    public function save_category_info($data) {
        $this->db->insert('tbl_category', $data);
    }

    public function select_all_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_category_info_by_category_id($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

    public function select_category_info_by_category_id($category_id) {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_category_info($data, $category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

    public function unpublished_category_info($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function published_category_info($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function save_blog_info($data) {
        $this->db->insert('tbl_blog', $data);
    }

    public function select_all_blog_info() {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function delete_blog_info_by_blog_id($blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->delete('tbl_blog');
    }

    //select_blog_info_by_blog_id($blog_id)
    public function select_blog_info_by_blog_id($blog_id) {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('blog_id', $blog_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_blog_info($data, $blog_id) {
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog', $data);
    }

    public function unpublished_blog_info($blog_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog');
    }

    public function published_blog_info($blog_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('blog_id', $blog_id);
        $this->db->update('tbl_blog');
    }

    public function save_product_info($data) {
        $this->db->insert('tbl_product', $data);
    }

    public function select_all_product() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    public function select_all_published_product($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->order_by("product_id","desc");
        $query_result = $this->db->get('', $per_page, $offset);
        $result = $query_result->result();
        return $result;
    }
    public function select_recent_published_product(){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->order_by("product_id","desc");
        $this->db->limit(4);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result; 
    }

    public function select_image_gallery_product(){
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        //$this->db->order_by("product_id","desc");
        $this->db->limit(8);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_product_info($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->order_by("product_id","desc");
        $query = $this->db->get('', $per_page, $offset);
        
        $result = $query->result();
        return $result;

//        $this->db->select('*');
//        $this->db->from('tbl_product');
//        
//        $query = $this->db->get('', $per_page, $offset);
//        $result=$query->result();
//        return $result;
    }

    public function delete_product_info_by_product_id($product_id) {
        $this->db->where('product_id', $product_id);
        $this->db->delete('tbl_product');
    }

    public function select_product_info_by_product_id($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    public function update_product_info($data, $product_id) {
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product', $data);
    }

    public function unpublished_product_info($product_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function published_product_info($product_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('product_id', $product_id);
        $this->db->update('tbl_product');
    }

    public function select_all_orders($per_page, $offset) {
        $sql = "SELECT tbl_order.order_id,tbl_order.order_total, tbl_customer.first_name,tbl_customer.last_name 
            FROM tbl_order, tbl_customer 
            WHERE tbl_order.customer_id=tbl_customer.customer_id
            ORDER BY order_id DESC";
        $query_result = $this->db->query($sql);
        //$query = $this->db->get('', $per_page, $offset);
        $result = $query_result->result();
        return $result;
    }
    public function delete_order_by_order_id($order_id)
    {
        $this->db->where('order_id', $order_id);
        $this->db->delete('tbl_order');
    }
    public function select_order_by_order_id($order_id)
    {
        $sql="SELECT * FROM tbl_order WHERE order_id='$order_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    public function select_customer_info_by_customer_id($customer_id)
    {
        $sql="SELECT * FROM tbl_customer WHERE customer_id='$customer_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    public function select_shipping_info_by_shipping_id($shipping_id)
    {
        $sql="SELECT * FROM tbl_shipping_info WHERE shipping_id='$shipping_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    public function select_payment_info_by_payment_id($payment_id)
    {
        $sql="SELECT * FROM tbl_payment WHERE payment_id='$payment_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->row();
        return $result;
    }
    public function select_order_details_by_order_id($order_id)
    {
        $sql="SELECT * FROM tbl_order_details WHERE order_id='$order_id'";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
   public function search_order($search_text)
    {
        
        $sql="SELECT tbl_order.order_id,tbl_order.order_total, tbl_customer.first_name,tbl_customer.last_name 
            FROM tbl_order, tbl_customer 
            WHERE tbl_order.customer_id=tbl_customer.customer_id AND (tbl_order.order_id='$search_text' OR tbl_customer.first_name LIKE '%$search_text%')";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }
     public function select_under_reorder_level_product()
    {
        $sql = "SELECT * FROM tbl_product WHERE product_quantity <= product_reorder_level";
        $query_result = $this->db->query($sql);
        $result = $query_result->result();
        return $result;
    }

    public function save_admin_info($data){
        $this->db->insert('tbl_admin', $data);
    }
    
     public function select_all_admin_info($per_page, $offset) {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->order_by("admin_id","desc");
        $query = $this->db->get('', $per_page, $offset);
        $result = $query->result();
        return $result;
    }
    public function select_admin_info($admin_id){
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->order_by("admin_id","desc");
        $query = $this->db->get();
        $result = $query->result();
        return $result;
    }
    
}
