<?php

class Welcome_Model extends CI_Model {

    //put your code here
    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_published_blog() {
        $this->db->select('*');
        $this->db->from('tbl_blog');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function display_product_details_by_product_id($product_id) {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    public function select_product_by_category_id($category_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('category_id', $category_id);
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

}
