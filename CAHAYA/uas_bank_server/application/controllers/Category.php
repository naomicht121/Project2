<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Category extends REST_Controller {

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

//         function index_get() {
//   $categori_id = $this->get('categori_id');
// if ($categori_id == '') {
//   $this->db->join('categories','products.categori_id = categories.categori_id');
//   $this->db->join('account','products.account_id = account.account_id');
//   $kontak = $this->db->get('products')->result();
// } else {
//   $this->db->join('categories','products.categori_id = categories.categori_id');
//   $this->db->join('account','products.account_id = account.account_id');
//   $this->db->where('categori_id', $categori_id);
//   $kontak = $this->db->get('products')->result();
// }
//   $this->response($kontak, 200);
// }

       function index_get() {
  $categori_id = $this->get('categori_id');

  $this->db->join('categories c','p.categori_id = c.categori_id');
  $this->db->join('account a','p.account_id = a.account_id');
  $this->db->where('p.categori_id', $categori_id);
  $kontak = $this->db->get('products p')->result();
  $this->response($kontak, 200);
}

    }