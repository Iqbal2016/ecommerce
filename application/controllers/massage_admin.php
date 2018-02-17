<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Massage_admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('massage_admin_model', 'ma_model', true);
    }
    
    public function index(){
        $data =array();
        $data['title']="View massage";
        $data['all_contract'] = $this->ma_model->select_all_contract_info();   
        $data['adminmaincontent'] = $this->load->view('admin/contract_massage', $data, TRUE);
        $this->load->view('admin/admin_master', $data);       
    }
}
