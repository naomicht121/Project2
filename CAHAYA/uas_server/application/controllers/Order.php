<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Order extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }

// function index_post() {
// $invoice = array(
// 'buyer_id' => $this->post('buyer_id'),
// 'seller_id' => $this->post('seller_id'),
// 'price' => $this->post('price'),
// 'payment_satus' => 'cancelled'
// );
// $insert = $this->db->insert('invoices', $data);
// $invoice_id = $this->db->insert_id();

// $order = array(
// 'invoice_id' => $invoices_id,
// 'buyer_id' => $this->post('buyer_id'),
// 'seller_id' => $this->post('seller_id'),
// 'product_id' => $this->post('product_id'),
// 'quantity' => $this->post('quantity'),
// 'shipping_status' => 'Belum Terkirim'
// );
// $insert2 = $this->db->insert('orders', $order);


// if ($insert && $insert2) {
// $this->response($invoice,$order, 200);
// } else {
// $this->response(array('status' => 'fail', 502));
// }
// }

		function index_get($id) {
        $order_id = $this->get('order_id');
        // $account_id = $this->get('account_id');
        if ($order_id == '') {
            $this->db->select('*');
        	$this->db->from('orders');
    		$this->db->join('products','orders.product_id = products.product_id');
            $this->db->join('account','orders.seller_id = account.account_id');
    		$this->db->join('account','orders.buyer_id = account.account_id');
            $order = $this->db->get('orders')->result();
        } else {
            // $this->db->where('order_id' ,array('orders.product_id' => $order_id));
            $this->db->get_where('orders' ,array('orders.buyer_id' => $id));
            $order = $this->db->get('orders')->result();
        }
        $this->response($order, 200);
    }

}