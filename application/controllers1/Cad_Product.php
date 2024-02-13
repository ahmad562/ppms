<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad_Product extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cad_Product_Model');
    }

    public function index() {
        $this->load->view('header');
	    $this->load->view('menu');
        $data['products'] = $this->Cad_Product_Model->getAllProducts();
        $this->load->view('cad/view_cad_products', $data);
        $this->load->view('footer');
    }
   
    public function add_cad(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('cad/add_cad');
        $this->load->view('footer');
    }
    public function add() {
        $data = array(
            'cad_product_name' => $this->input->post('cad_product_name')
        );
        $this->Cad_Product_Model->addProduct($data);
        redirect('Cad_Product');
    }

    public function edit($id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data['product'] = $this->Cad_Product_Model->getProductById($id);
        $this->load->view('cad/edit_product_view', $data);
        $this->load->view('footer');
    }

    public function update($id) {
        $data = array(
            'cad_product_name' => $this->input->post('cad_product_name')
        );
        $this->Cad_Product_Model->updateProduct($id, $data);
        redirect('cad_Product');
    }

    public function delete($id) {
        $this->Cad_Product_Model->deleteProduct($id);
        redirect('cad_product');
    }
}
?>