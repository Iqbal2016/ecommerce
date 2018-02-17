<?php

class Cart extends CI_Controller {
    //put your code 
    
    public function __construct() {
        parent::__construct();
        $this->load->model('welcome_model','w_model',true);
        $this->load->model('super_admin_model', 'sa_model', true);
        
    }
    public function add_to_cart($product_id)
    {
        
        //$product_info = $this->w_model->display_product_details_by_product_id($product_id);
        $product_info=$this->w_model->display_product_details_by_product_id($product_id);
        $data = array(
               'id'      => $product_info->product_id,
               'qty'     => 1,
               'price'   => $product_info->product_price,
               'name'    => $product_info->product_name,
               'image'    => $product_info->product_image,
               
            );
    $this->cart->insert($data);
   // $this->cart->insert($data); 
    redirect('cart/show_cart');
    }
    public function update_cart()
    {
        $rowid=$this->input->post('rowid',true);
        $qty=$this->input->post('qty',true);
        $data = array(
               'rowid' => $rowid,
               'qty'   => $qty
            );

        $this->cart->update($data);
        redirect('cart/show_cart');
    }
    public function delete_item($rowid)
    {
        $data = array(
               'rowid' => $rowid,
               'qty'   => 0
            );

        $this->cart->update($data);
        redirect('cart/show_cart');
    }

    public function show_cart()
    {
        $data = array();
        $data['title'] = "Shopping Cart";
        $data['image_gallery'] = $this->sa_model->select_image_gallery_product();
        $data['all_category'] = $this->w_model->select_all_published_category();
        $data['maincontent'] = $this->load->view('cart_view', $data, true);
        $this->load->view('master', $data);
    }
}

?>
