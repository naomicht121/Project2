<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Chose_category extends REST_Controller {

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
  $categori_id = $this->get('categori_id');
if ($categori_id == '') {
  $this->db->join('categories','products.categori_id = categories.categori_id');
  $this->db->join('account','products.account_id = account.account_id');
  $kontak = $this->db->get('products')->result();
} else {
  $this->db->join('categories','products.categori_id = categories.categori_id');
  $this->db->join('account','products.account_id = account.account_id');
  $this->db->where('products.categori_id', $categori_id);
  $kontak = $this->db->get('products')->result();
}
  $this->response($kontak, 200);
}

//        function index_get() {
//   // $categori_id = $this->get('categori_id');

//   $kontak = $this->db->get('categories')->result();
//   $this->response($kontak, 200);
// }

       function index_delete() {
        $categori_id = $this->delete('categori_id');
        $this->db->where('categori_id', $categori_id);
        $delete = $this->db->delete('categories');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_post() {
        $data = array(
                    'category'     => $this->post('category')
                    );
        $insert = $this->db->insert('categories', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    }