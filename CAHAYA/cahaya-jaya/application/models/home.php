<?php

class home extends CI_Model{

public function __construct(){
		$this->load->database();
	}

    function getByCategory($uri){
        $this->db->join('categories c','p.categori_id = c.categori_id');
        $q = $this->db->get_where('products p',array('p categori_id' => $uri));
        return $q->result();
    }
	 function process(){
	 	// $item =$this->cart->contents();

        $invoice = array(
            'buyer_id' => $this->session->userdata('account_id'),
            'price' => $this->cart->total(),
            'payment_status' => 'In Progress'
        );
        $this->db->insert('invoices',$invoice);
        $invoice_id = $this->db->insert_id();
        
        foreach($this->cart->contents() as $item){
        	$a=$item['price'];
            $b=$item['qty'];
        	$d=$item['account_id'];
        	$c= $a * $b;
           $order = array(
            'invoice_id' => $invoice_id,
            'buyer_id' => $this->session->userdata('account_id'),
            'seller_id' => $item['account_id'],
            'product_id' => $item['id'],
            'price' => $c,
            'quantity' => $item['qty'],
            'shipping_status' => 'On Progress'
        );
            $this->db->insert('orders',$order);    
        }
        
        return TRUE;
    }

    public function stock($product_id,$qtyAkhir)
    {
        $this->db->where('product_id',$product_id);
        $data = array(
            'stock' => $qtyAkhir
        );
       return $this->db->update('products',$data);
    }

    function shopping_history($account_id)
    {
        $status = 'Already Received';
        $this->db->select('invoices.invoice_id, products.product_id, products.product_name, products.categori_id, products.product_image, account.name, orders.price as p, orders.quantity, orders.shipping_status, orders.order_id, account.account_id, orders.resi, orders.courier');
        // $this->db->from('orders');
            $this->db->join('products','orders.product_id = products.product_id');
            $this->db->join('invoices','orders.invoice_id = invoices.invoice_id');
            $this->db->join('account','orders.buyer_id = account.account_id');
            $this->db->join('account o','orders.seller_id = o.account_id');
            $this->db->order_by("order_id", "desc");
        $data = $this->db->get_where('orders',array('orders.buyer_id' => $account_id, 'shipping_status' => $status)); // menampilkan data orderan yang id user nya sama dengan session toko id
        return $data->result_array();
    }

    function shopping_history2($account_id)
    {
        $data = $this->db->query("SELECT invoices.invoice_id, products.product_id, products.product_name, products.categori_id, products.product_image, account.name, orders.price as p, orders.quantity, orders.shipping_status, orders.order_id, account.account_id, orders.resi, orders.courier FROM orders JOIN products ON orders.product_id = products.product_id JOIN invoices ON orders.invoice_id = invoices.invoice_id JOIN account ON orders.seller_id = account.account_id WHERE shipping_status = 'On Progress' OR shipping_status = 'On Delivery' order by order_id desc"); 
        return $data->result_array();
    }

    function shopping_history_admin()
    {
        $data = $this->db->query("SELECT invoices.invoice_id, invoices.payment_status, products.product_name, invoices.date, account.name, orders.price, orders.shipping_status, orders.resi, account.account_id, orders.order_id FROM orders JOIN products ON orders.product_id = products.product_id JOIN invoices ON orders.invoice_id = invoices.invoice_id JOIN account ON orders.seller_id = account.account_id WHERE shipping_status = 'On Progress' OR shipping_status = 'On Delivery' order by order_id desc"); 
        return $data->result_array();
    }

    function shopping_history_admin2()
    {
        $this->db->select('invoices.invoice_id, invoices.payment_status, products.product_name, invoices.date, account.name, orders.price, orders.shipping_status, orders.resi, account.account_id, orders.order_id');
        // $this->db->from('orders');
            $this->db->join('products','orders.product_id = products.product_id');
            $this->db->join('invoices','orders.invoice_id = invoices.invoice_id');
            $this->db->join('account','orders.seller_id = account.account_id');
            $this->db->order_by("order_id", "desc");
        $data = $this->db->get_where('orders',array('orders.shipping_status' => 'Already Received')); 
        return $data->result_array();
    }

    function invoice_detail($invoice_id)
    {
        $this->db->select('orders.invoice_id, products.product_id, products.categori_id, products.product_image, orders.order_id, account.account_id, invoices.price as i, products.product_name, account.name, orders.quantity, products.price as p, orders.price as o, orders.shipping_status, orders.resi, orders.courier');
        // $this->db->from('orders');
            $this->db->join('products','orders.product_id = products.product_id');
            $this->db->join('invoices','orders.invoice_id = invoices.invoice_id');
            $this->db->join('account','orders.seller_id = account.account_id');
            $this->db->order_by("order_id", "desc");
        $data = $this->db->get_where('orders',array('orders.invoice_id' => $invoice_id)); 
        return $data->result_array();
    }

    function total_invoice($invoice_id)
    {
        $data = $this->db->query("SELECT price FROM invoices where invoice_id = $invoice_id"); 
        return $data->result_array();
    }

    function order_in($account_id)
    {
        $status = 'On Progress';
        $this->db->select('orders.price as a, invoices.payment_status, products.product_image, products.product_name, orders.quantity, orders.order_id, account.name, account.address, account.telp, orders.shipping_status');
        // $this->db->from('orders');
            $this->db->join('products','orders.product_id = products.product_id');
            $this->db->join('invoices','orders.invoice_id = invoices.invoice_id');
            $this->db->join('account as o','orders.seller_id = o.account_id');
            $this->db->join('account','orders.buyer_id = account.account_id');
            $this->db->order_by("order_id", "desc");
        $data = $this->db->get_where('orders',array('orders.seller_id' => $account_id, 'orders.shipping_status' => $status)); // menampilkan data orderan yang id user nya sama dengan session toko id
        return $data->result_array();
    }

    function order_in2($account_id)
    {
        $status = 'On Delivery';
        $this->db->select('orders.price as a, invoices.payment_status, products.product_image, products.product_name, orders.quantity, orders.order_id, account.name, account.address, account.telp, orders.shipping_status, orders.resi, orders.courier');
        // $this->db->from('orders');
            $this->db->join('products','orders.product_id = products.product_id');
            $this->db->join('invoices','orders.invoice_id = invoices.invoice_id');
            $this->db->join('account as o','orders.seller_id = o.account_id');
            $this->db->join('account','orders.buyer_id = account.account_id');
            $this->db->order_by("order_id", "desc");
        $data = $this->db->get_where('orders',array('orders.seller_id' => $account_id, 'orders.shipping_status' => $status)); // menampilkan data orderan yang id user nya sama dengan session toko payment_status
        return $data->result_array();
    }

    function order_in3($account_id)
    {
        $status = 'Already Received';
        $this->db->select('orders.price as a, invoices.payment_status, products.product_image, products.product_name, orders.quantity, orders.order_id, account.name, account.address, account.telp, orders.shipping_status, orders.resi, orders.courier');
        // $this->db->from('orders');
            $this->db->join('products','orders.product_id = products.product_id');
            $this->db->join('invoices','orders.invoice_id = invoices.invoice_id');
            $this->db->join('account as o','orders.seller_id = o.account_id');
            $this->db->join('account','orders.buyer_id = account.account_id');
            $this->db->order_by("order_id", "desc");
        $data = $this->db->get_where('orders',array('orders.seller_id' => $account_id, 'orders.shipping_status' => $status)); // menampilkan data orderan yang id user nya sama dengan session toko payment_status
        return $data->result_array();
    }

    function my_product($account_id)
    {
        $this->db->select('*');
        // $this->db->from('orders');
            $this->db->join('account','products.account_id = account.account_id');
            $this->db->join('categories','products.categori_id = categories.categori_id');
        $data = $this->db->get_where('products',array('products.account_id' => $account_id)); // menampilkan data orderan yang id user nya sama dengan session toko id
        return $data->result();
    }

    function invoice_history($account_id)
    {
        $status = 'Paid';
        $this->db->select('*');
        // $this->db->from('invoices as c');
            // $this->db->join('products k','u.product_id = k.product_id');
            $this->db->join('account','invoices.buyer_id = account.account_id');
            // $this->db->join('account as o','u.seller_id = o.account_id');
            $this->db->order_by("date", "desc");
        $data = $this->db->get_where('invoices',array('invoices.buyer_id' => $account_id, 'payment_status' => $status)); // menampilkan data orderan yang id user nya sama dengan session toko id
        return $data->result();
    }

    function invoice_history2($account_id)
    {
        $status = 'In Progress';
        $this->db->select('*');
        // $this->db->from('invoices as c');
            // $this->db->join('products k','u.product_id = k.product_id');
            $this->db->join('account','invoices.buyer_id = account.account_id');
            // $this->db->join('account as o','u.seller_id = o.account_id');
            $this->db->order_by("date", "desc");
        $data = $this->db->get_where('invoices',array('invoices.buyer_id' => $account_id, 'payment_status' => $status)); // menampilkan data orderan yang id user nya sama dengan session toko id
        return $data->result();
    }

    function saldo_invoice($account_id)
    {
        $this->db->where('account_id',$account_id); // menampilkan data orderan yang id user nya sama dengan session toko id
        $data = $this->db->get('account');
        return $data->result();
    }

    function login($data){      
        return $this->db->get_where('account',$data);
    }

    function stock_cart(){      
        return $this->db->get('products');
    }

    function update_account($id,$data_account){
    // print_r($u); die;
    return  $this->db->update('account',$data_account,array('account_id'=>$id));  
  } 

  function category(){
    // print_r($u); die;
    $a=$this->db->get('categories');  
    return $a->result();  
  } 

  function category_admin(){
    // print_r($u); die;
    $a=$this->db->get('categories');  
    return $a->result_array();  
  } 

  function category_product($id){
    // print_r($u); die;
    $a=$this->db->get('categories');  
    return $a->result();  
  } 

  function shipping_status($id,$status,$resi,$courier){
    $data = $this->db->query("UPDATE orders set shipping_status = '$status',resi = '$resi',courier = '$courier' Where order_id = $id");
    return $data;
  }

  function shipping_status_buyer($id,$status){
    $data = $this->db->query("UPDATE orders set shipping_status = '$status' Where order_id = $id");
    return $data;
  }

  function comment(){
    $data = array(
        'account_id' => $this->session->userdata('account_id'),
        'product_id' => $this->input->post('product_id'),
        'comment' => $this->input->post('comment')
    );
    $a = $this->db->insert('comment', $data);
    return $a;
  }

  public function voucher()
    {
        $code = $this->input->GET('code', TRUE);
        $data = $this->db->query("SELECT * from voucher where code = '$code' and status = 'Not used'");
        return $data->result();
    }

    public function saldo($id)
    {
        $status = 'Not Used';
        $this->db->order_by("date", "desc");
         $this->db->where(array('account_id' => $id, 'status' => $status));; // menampilkan data orderan yang id user nya sama dengan session toko id
        $data = $this->db->get('topup');
        return $data->result();
    }

    public function saldo2($id)
    {
        $status = 'Used';
        $this->db->order_by("date", "desc");
         $this->db->where(array('account_id' => $id, 'status' => $status));; // menampilkan data orderan yang id user nya sama dengan session toko id
        $data = $this->db->get('topup');
        return $data->result();
    }

    public function status_voucher($id)
    {
        $a = 'Used';
        $data = $this->db->query("UPDATE voucher set status = '$a' Where voucher_id = $id");
        return $data;
    }

    public function clear_payment($price,$account_id)
    {
        $data = $this->db->query("UPDATE account set saldo = saldo + $price Where account_id = $account_id");
        return $data;
    }

    public function clear_status($id)
    {
        $a = 'Already Received';
        $data = $this->db->query("UPDATE orders set shipping_status = '$a' Where order_id = $id");
        return $data;
    }

    public function tambah_saldo($id,$nominal)
    {
        $a = 'Used';
        $data = $this->db->query("UPDATE account set saldo = saldo + $nominal Where account_id = $id");
        return $data;
    }

    public function status_topup($uniq_key)
    {
        $a = 'Used';
        $data = $this->db->query("UPDATE topup set status = '$a' Where uniq_key = $uniq_key");
        return $data;
    }

    public function pay_to_seller($id,$total)
    {
        $data = $this->db->query("UPDATE account set saldo = saldo + $total Where account_id = $id");
        return $data;
    }

    public function payment($invoice_id)
    {

        $data = $this->db->query("UPDATE invoices set payment_status = 'Paid' Where invoice_id = $invoice_id");
        return $data;
    }

    public function update_saldo($price)
    {
        $account_id = $this->session->userdata('account_id');
        $data = $this->db->query("UPDATE account set saldo = saldo - $price Where account_id = $account_id");
        return $data;
    }

    function topup($nominal,$id,$status){
        $angka = range(0,9);
        shuffle($angka);
        $uniq = array_rand($angka,6);
        $uniqu = implode($uniq);
        $data = array(
        'account_id' => $this->session->userdata('account_id'),
        'uniq_key' => $uniqu,
        'nominal' => $nominal,
        'status' => $status
    );
    $a = $this->db->insert('topup', $data);
    return $a;
    }

    function get_product_list($limit, $start){
        $query = $this->db->get('product', $limit, $start);
        return $query;
    }
}