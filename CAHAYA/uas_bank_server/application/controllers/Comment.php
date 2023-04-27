<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Comment extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }

		function index_get() {
			$product_id = $this->get('product_id');
				
				  $this->db->join('account a','c.account_id = a.account_id');
				  $this->db->join('products p','c.product_id = p.product_id');
				  $this->db->where('c.product_id', $product_id);
				  $kontak = $this->db->get('comment c')->result();
				
				$this->response($kontak, 200);
				}

    }