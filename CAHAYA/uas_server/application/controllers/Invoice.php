<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Invoice extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }

  //       function index_get() {
  //       $invoice_id = $this->get('invoice_id');
  //       	$this->db->select('*');
  //   		$this->db->join('buyer','invoices.buyer_id = buyer.buyer_id');
  //       if ($invoice_id == '') {
  //           $invoice = $this->db->get_where('invoices')->result();
  
  //       } else {
  //           $this->db->where('invoice_id' ,array('invoices.invoice_id' => $invoice_id));
  //           $invoice = $this->db->get('invoices')->result();
  //       }
  //       $this->response($invoice, 200);
  //   }

	function index_get() {
        $invoice_id = $this->get('invoice_id');
     //    $this->db->select('*');
        if ($invoice_id == '') {
    	$this->db->join('buyer','invoices.buyer_id = buyer.buyer_id');
            $invoice = $this->db->get('invoices')->result();
        } else {
            $this->db->where('invoice_id',$invoice_id);
            $invoice = $this->db->get('invoices')->result();
        }
        $this->response($invoice, 200);
    }

    }