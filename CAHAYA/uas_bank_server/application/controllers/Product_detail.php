<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Product_detail extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }

      //   function index_get($id) {
      //    $this->db->select('*');

      //      $this->db->from('products');

      //      $this->db->where('product_id',$id);

      //      $query = $this->db->get();
           
      //      if($query->num_rows() == 1)
      //      {

      //          $this->response(200);
      //          $result = $query->result();

      //      }
      //      else
      //      {

      //        return 0;

      //     }
      //     return $result;

      // }

        function index_get() {
$product_id = $this->get('product_id');
if ($product_id == '') {
  // $this->db->join('comment','products.product_id = comment.product_id');
  $this->db->join('categories','products.categori_id = categories.categori_id');
  $this->db->join('account','products.account_id = account.account_id');
$kontak = $this->db->get('products')->result();
} else {
  // $this->db->join('comment','products.product_id = comment.product_id');
  $this->db->join('categories','products.categori_id = categories.categori_id');
  $this->db->join('account','products.account_id = account.account_id');
$this->db->where('product_id', $product_id);
$kontak = $this->db->get('products')->result();
}
$this->response($kontak, 200);
}

    }