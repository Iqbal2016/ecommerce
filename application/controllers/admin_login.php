<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Admin_Login extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        //echo '-----'.$admin_id;
        if ($admin_id != null) {
            redirect('super_admin', 'refresh');
        }
    }

    public function index() {
        $this->load->view('admin/login');
    }

    public function check_login() {
        $email_address = $this->input->post('admin_email_address', true);
        $password = $this->input->post('admin_password', true);

        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_admin($email_address, $password);

        //echo '<pre>';
        //print_r($result);

        if ($result) {
            $data = array();
            $data['admin_id'] = $result->admin_id;
            $data['admin_name'] = $result->admin_name;
            $data['admin_images'] = $result->admin_images;
            $this->session->set_userdata($data);
            redirect("super_admin");
        } else {
            $sdata = array();
            $sdata['exception'] = "User Email / Password Invalide ! ";
            $this->session->set_userdata($sdata);
            redirect("admin_login");
        }
    }

}

?>