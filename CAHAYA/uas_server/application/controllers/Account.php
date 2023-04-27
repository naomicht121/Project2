<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Account extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }



    function index_get() {
        $account_id = $this->get('account_id');
        if ($account_id == '') {
            $account = $this->db->get('account')->result();
        } else {
            $this->db->where('account_id', $account_id);
            $account = $this->db->get('account')->result();
        }
        $this->response($account, 200);
    }

    function index_post() {
        $data = array(
                        'image' => $this->post('image'),
                        'username' => $this->post('username'),
                        'password' => $this->post('password'),
                        'name' => $this->post('name'),
                        'email' => $this->post('email'),
                        'address' => $this->post('address'),
                        'city' => $this->post('city'),
                        'telp' => $this->post('telp'),
                        'rekening' => $this->post('rekening'),
                        'grup' => $this->post('grup')
                    );
        $insert = $this->db->insert('account', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_put() {
            $account_id = $this->put('id');
            $data = array(
                        'image' => $this->put('image'),
                        'username' => $this->put('username'),
                        'password' => $this->put('password'),
                        'name' => $this->put('name'),
                        'email' => $this->put('email'),
                        'address' => $this->put('address'),
                        'city' => $this->put('city'),
                        'telp' => $this->put('telp'),
                        'rekening' => $this->put('rekening')            
);
$this->db->where('account_id', $account_id);
$update = $this->db->update('account', $data);
if ($update) {
$this->response($data, 200);
} else {
$this->response(array('status' => 'fail', 502));
}
}

}