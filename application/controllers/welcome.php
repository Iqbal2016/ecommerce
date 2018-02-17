<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
     public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model', 'w_model', TRUE);
        $this->load->model('super_admin_model', 'sa_model', true);
    }
	public function index()
	{
           $data =array();
           $data['title'] = 'Home';
            //---------------------------
            $this->load->library('pagination');
            $config['base_url'] = base_url() .'welcome/index/';
            $config['total_rows'] = $this->db->count_all('tbl_product');
            $config['per_page'] = '8';
            $config['full_tag_open'] = '<a>';
            $config['full_tag_close'] = '</a>';
            $this->pagination->initialize($config);
            //-------------------------
           $data['image_gallery'] = $this->sa_model->select_image_gallery_product();
           $data['all_product'] = $this->sa_model->select_all_published_product($config['per_page'], $this->uri->segment(3));
           $data['all_category'] = $this->w_model->select_all_published_category();           
           $data['maincontent'] = $this->load->view('home_content', $data, TRUE);
           $this->load->view('master', $data);
	}
        public function product_details($product_id) {
            $data = array();
            $data['title'] = 'Product by category'; 
            $data['recent_product'] = $this->sa_model->select_recent_published_product();
            $data['image_gallery'] = $this->sa_model->select_image_gallery_product();
            $data['all_category'] = $this->w_model->select_all_published_category();
            $data['product_details'] = $this->w_model->display_product_details_by_product_id($product_id);
            $data['maincontent'] = $this->load->view('product_content', $data, TRUE);
            $this->load->view('master', $data);
        }
        public function category_product($category_id)
        {
            $data = array();
            $data['title'] = "Category Product";
            $data['image_gallery'] = $this->sa_model->select_image_gallery_product();
            $data['all_category'] = $this->w_model->select_all_published_category();
            $data['all_product'] = $this->w_model->select_product_by_category_id($category_id);
            $data['maincontent'] = $this->load->view('product_category', $data, true);
            $this->load->view('master', $data);
        }
        public function login(){
            $data = array();
            $data['title'] = 'Login';
            $data['image_gallery'] = $this->sa_model->select_image_gallery_product();
            $data['all_category'] = $this->w_model->select_all_published_category();
            $data['maincontent'] = $this->load->view('login_content', $data, TRUE);
            $this->load->view('master', $data);
        }
        public function register(){
            $data = array();
            $data['title'] = 'Register';
            $data['image_gallery'] = $this->sa_model->select_image_gallery_product();
            $data['all_category'] = $this->w_model->select_all_published_category();
            $data['maincontent'] = $this->load->view('register_content', $data, TRUE);
            $this->load->view('master', $data);
        }

        public function contact() {
            $data = array();
            $data['title'] = 'Contact';
            $data['image_gallery'] = $this->sa_model->select_image_gallery_product();
            $data['all_category'] = $this->w_model->select_all_published_category();
            $data['maincontent'] = $this->load->view('contact_content', $data, TRUE);
            $this->load->view('master', $data);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */