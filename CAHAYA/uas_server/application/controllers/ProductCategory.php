<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class ProductCategory extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }

 // ==========================================================================================================>
     //CRUD Products
    function index_get() {

        // $key = $this->get('search');
   $id = array(
                'uri' => $this->get('uri')
    );
   // print_r($uri); die;

            $ida = $id['uri'];
            $this->db->where('p.categori_id',$ida);
            $this->db->join('categories c','p.categori_id = c.categori_id');
            // $this->db->like('category',$key);
            $product = $this->db->get('products p')->result();

        $this->response($product, 200);
    }

    function index_post() {
        $data_product = array(
                    'account_id'     => $this->post('account_id'),
                    'product_name'     => $this->post('product_name'),
                    'description'    => $this->post('description'),
                    'categori_id'    => $this->post('categori_id'),
                    'price'       => $this->post('price'),
                    'stock'      => $this->post('stock'),
                    'product_image'         => $this->post('product_image')
                    );
        $insert = $this->db->insert('products', $data_product);
        if ($insert) {
            $this->response($data_product, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $product_id = $this->put('product_id');
        $data_product = array(
                    'product_id'     => $this->put('product_id'),
                    'seller_id'     => $this->put('seller_id'),
                    'product_name'     => $this->put('product_name'),
                    'description'    => $this->put('description'),
                    'categori_id'    => $this->put('categori_id'),
                    'price'       => $this->put('price'),
                    'stock'      => $this->put('stock'),
                    'product_image'         => $this->put('product_image')
                    );
        $this->db->where('product_id', $product_id);
        $update = $this->db->update('products', $data_product);
        if ($update) {
            $this->response($data_product, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $product_id = $this->delete('product_id');
        $this->db->where('product_id', $product_id);
        $delete = $this->db->delete('products');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}
