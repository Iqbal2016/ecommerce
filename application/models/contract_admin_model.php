<?php


class Contract_admin_model extends CI_Model{
    
    public function save_contract_info($data){
        $this->db->insert('tbl_contact', $data);
    }
}
