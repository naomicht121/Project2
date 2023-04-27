<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class List_category extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }


function index_get() {

				  $kontak = $this->db->get('categories')->result();
				
				$this->response($kontak, 200);
				}
	}