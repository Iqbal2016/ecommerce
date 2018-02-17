<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');


class Contract_admin extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->model('contract_admin_model', 'con_model', true);
    }
    
    public function save_contract(){
        $data = array();
        $data['name'] = $this->input->post('name', true);
        $data['email'] = $this->input->post('email', true);
        $data['number'] = $this->input->post('number', true);
        $data['company'] = $this->input->post('company', true); 
        $data['subject'] = $this->input->post('subject', true);
        $data['message'] = $this->input->post('message', true);  
        $this->con_model->save_contract_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Massage Successfully !';
        $this->session->set_userdata($sdata);
        redirect('welcome/contact');
    }
    public function all_slider(){
        $data = array();
        $data['all_slider'] = $this->sl_model->select_all_slider_info();              
        $data['adminmaincontent'] = $this->load->view('admin/slider_gride', $data, TRUE);
        $this->load->view('admin/admin_master', $data); 
    }
    public function edit_slider($slide_id){
        $data = array();
        $data['edite_slider'] = $this->sl_model->select_blog_info_by_slider_id($slide_id);
        $data['adminmaincontent'] = $this->load->view('admin/edite_slider', $data, TRUE);
        $this->load->view('admin/admin_master', $data);
    }
    public function update_slide($slide_id){
        $data = array();
        $slide_id = $this->input->post('slide_id', true);
        /* -----------Upload start--------------- */

        $config ['upload_path'] = 'images/slide_image/';
        $config ['allowed_types'] = 'gif|jpg|png';
        $config ['max_size'] = '20000';
        $config ['max_width'] = '2024';
        $config ['max_height'] = '1768';
        $error = array();
        $fdata = array();
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('slide_image')) {
            $error = $this->upload->display_errors();
        } else {
            $fdata = $this->upload->data();

            $data ['slide_image'] = base_url() . $config ['upload_path'] . $fdata ['file_name'];
            
        }
        /* -----------Upload End--------------- */
        $data['slide_title'] = $this->input->post('slide_title', true);
        $data['slide_short_description'] = $this->input->post('slide_short_description', true);
        $data['slide_description'] = $this->input->post('slide_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->sl_model->update_slider_info($data, $slide_id);
        $sdata = array();
        $sdata['message'] = "Updated Slider Successfully";
        $this->session->set_userdata($sdata);
        redirect('alider_admin/all_slider/' . $slide_id);
    }
   
}
