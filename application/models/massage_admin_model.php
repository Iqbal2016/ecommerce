<?php

class Massage_admin_model extends CI_Model{
    
    public function select_all_contract_info(){
        $this->db->select('*');
        $this->db->from('tbl_contact');
        $this->db->order_by("contract_id","desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
}
