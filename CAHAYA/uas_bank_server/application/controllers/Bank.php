<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Bank extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }

        function index_post() {
        $data_product = array(
                    'uniq_key'     => $this->post('uniq_key'),
                    'nominal'    => $this->post('nominal'),
                    );
        $insert = $this->db->insert('topup', $data_product);
        if ($insert) {
            $this->response($data_product, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }

    function index_get() {
        $uniq_key = $this->get('uniq_key');
        $nominal = $this->get('nominal');
        if ($uniq_key == '' and $nominal == '') {
            $topup = $this->db->get('topup')->result();
        } else {
            $this->db->where(array('uniq_key' => $uniq_key, 'nominal' => $nominal));
            $topup = $this->db->get('topup')->result();
        }
        $this->response($topup, 200);
    }


    }