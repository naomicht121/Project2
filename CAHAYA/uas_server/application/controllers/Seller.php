<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Seller extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }

   // CRUD Seller
    function index_get() {
        $seller_id = $this->get('seller_id');
        if ($seller_id == '') {
            $seller = $this->db->get('seller')->result();
        } else {
            $this->db->where('seller_id', $seller_id);
            $seller = $this->db->get('seller')->result();
        }
        $this->response($seller, 200);
    }

    function index_post() {
        $data_penjual = array(
                    'seller_id'     => $this->post('seller_id'),
                    'username'      => $this->post('username'),
                    'password'      => $this->post('password'),
                    'seller_name'   => $this->post('seller_name'),
                    'address'       => $this->post('address'),
                    'city'          => $this->post('city'),
                    'telp'          => $this->post('telp'),
                    'rekening'      => $this->post('rekening')
                    );

        $insert = $this->db->insert('seller', $data_penjual);
        if ($insert) {
            $this->response($data_penjual, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
        $seller_id = $this->put('seller_id');
        $data_penjual = array(
                    'seller_id'     => $this->put('seller_id'),
                    'username'     => $this->put('username'),
                    'password'     => $this->put('password'),
                    'seller_name'    => $this->put('seller_name'),
                    'address'      => $this->put('address'),
                    'city'         => $this->put('city'),
                    'telp'         => $this->put('telp'),
                    'rekening'         => $this->put('rekening')
                    );
        $this->db->where('seller_id', $seller_id);
        $update = $this->db->update('seller', $data_penjual);
        if ($update) {
            $this->response($data_penjual, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_delete() {
        $seller_id = $this->delete('seller_id');
        $this->db->where('seller_id', $seller_id);
        $delete = $this->db->delete('seller');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

}

?>