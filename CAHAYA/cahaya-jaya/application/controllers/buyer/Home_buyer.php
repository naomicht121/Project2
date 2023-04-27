<?php
Class Home_buyer extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        // print_r($_SESSION); die;
        $this->API="http://localhost/uas_server/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->library('cart');
        $this->load->library('pagination');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('home');

        if($this->session->userdata('account_id') == "" and
            $this->session->userdata('name') == ""){
            redirect(base_url("index"));
            }    
    }
    function index(){
        $key = array(
            'search' => $this->input->get('search')
            );
        if ($key == '') {
                // print_r($uri); die;
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/product'));
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('komponen_buyer/header');
                $this->load->view('buyer/index_buyer',$data);
                $this->load->view('komponen_buyer/footer');
            }elseif ($this->uri->segment(4)){
                $uri = array(
                        'uri' => $this->uri->segment(4)
                        );    
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/ProductCategory',$uri));
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('komponen_buyer/header');
                $this->load->view('buyer/index_buyer',$data);
                $this->load->view('komponen_buyer/footer'); 
            }elseif ($key != ''){
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/productspec',$key));
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('komponen_buyer/header');
                $this->load->view('buyer/index_buyer',$data);
                $this->load->view('komponen_buyer/footer');
            }
    }

    function shop(){
        $key = array(
            'search' => $this->input->get('search')
            );
        if ($key == '') {
                // print_r($uri); die;
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/product'));
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('komponen_buyer/header');
                $this->load->view('buyer/shop',$data);
                $this->load->view('komponen_buyer/footer'); 
            }elseif ($this->uri->segment(4)){
                $uri = array(
                        'uri' => $this->uri->segment(4)
                        );    
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/ProductCategory',$uri));
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('komponen_buyer/header');
                $this->load->view('buyer/shop',$data);
                $this->load->view('komponen_buyer/footer'); 
            }elseif ($key != ''){
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/productspec',$key));
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('komponen_buyer/header');
                $this->load->view('buyer/shop',$data);
                $this->load->view('komponen_buyer/footer'); 
            }
    }


    function account(){
        $account_id = $this->session->userdata('account_id');
        $where = array('account_id' => $account_id);
        $data['account'] = json_decode($this->curl->simple_get($this->API.'/account',$where));
        // print_r($data); die;
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/account',$data);
        $this->load->view('komponen_buyer/footer');
    }

    function invoice_detail($invoice_id){
        // $invoice_id = $this->input->post('invoice_id');
        // print_r($invoice_id); die;
        $data['detail'] = $this->home->invoice_detail($invoice_id);
        $data['total_invoice'] = $this->home->total_invoice($invoice_id);
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/invoice_detail',$data);
        $this->load->view('komponen_buyer/footer');
    }

    function product_detail($id,$kid){
        $where = array(
                        'product_id' => $id,
                        'categori_id' => $kid
            );
        $data['barang'] = json_decode($this->curl->simple_get($this->API.'/product_detail', $where));
        $data['related'] = json_decode($this->curl->simple_get($this->API.'/chose_category', $where));
        $data['comment'] = json_decode($this->curl->simple_get($this->API.'/comment', $where));
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/product_detail',$data);
    }

    public function update_account()
    {
        
        $config['upload_path'] = './assets/profile'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan


         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('image')){

        // $id = $this->input->post('account_id');
        // $data = array('account_id' => $id);
                    $data_account = array (
                        'image' => $this->input->post('image2'),
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'),
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'address' => $this->input->post('address'),
                        'city' => $this->input->post('city'),
                        'telp' => $this->input->post('telp'),
                        'rekening' => $this->input->post('rekening'),
                        'id' => $this->input->post('id')
                    );
                        // print_r($data_product); die;
                    $this->curl->simple_put($this->API.'/account', $data_account,  array(CURLOPT_BUFFERSIZE => 10));
                    redirect('buyer/home_buyer/account');
         }else{
        // $id = $this->input->post('account_id');
        // $data = array('account_id' => $id);

            $image = $this->upload->data();
                    $data_account = array (
                        'image'         => $image['file_name'] ,
                        'username'      => $this->input->post('username'),
                        'password'      => $this->input->post('password'),
                        'name'          => $this->input->post('name'),
                        'email'         => $this->input->post('email'),
                        'address'       => $this->input->post('address'),
                        'city'          => $this->input->post('city'),
                        'telp'          => $this->input->post('telp'),
                        'rekening'      => $this->input->post('rekening'),
                        'id'            => $this->input->post('id')
                    );
                        // print_r($data_product); die;
                    $this->curl->simple_put($this->API.'/account', $data_account,  array(CURLOPT_BUFFERSIZE => 10));
                    redirect(base_url('buyer/home_buyer/account'));
                }

    }

    public function add_to_cart(){
        $data = array(
               'id'         => $this->input->post('product_id'),
               'account_id'          => $this->input->post('account_id'),
               'name'       => $this->input->post('product_name'),
               'qty'                => $this->input->post('quantity'),
               'product_image'      => $this->input->post('product_image'),
               'price'              => $this->input->post('price'),
               'nama'              => $this->input->post('nama'),
               'seller_id'              => $this->input->post('id_seller'),
            );
        $a=$this->cart->insert($data);
        // print_r($a); die;

        redirect(base_url('buyer/Home_buyer/cart'));
}

    function cart(){
        $data['stock'] = $this->home->stock_cart();
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/cart',$data);
        $this->load->view('komponen_buyer/footer');
    }

    public function clear_cart(){
        $this->cart->destroy();
        redirect(base_url('buyer/Home_buyer'));  
    }

    public function remove_item($id){
        // $this->cart->remove($id);
          $data = array(
            'rowid'   => $id,
            'qty'     => 0
        );
        $this->cart->update($data);
        // if($i){
        //     echo 'aw'; die;
        // }else{
        //     echo 'awa'; die;
        // }
        redirect(base_url('buyer/Home_buyer/cart'));  
    }

    public function shopping_history(){
        $account_id = $this->session->userdata('account_id');
        $exp = array('payment_status' => 'Cancelled');
        // $where = array('account_id' => $account_id);
        // $params = array('product_id'=> $this->uri->segment(3));
        // $data['order'] = json_decode($this->curl->simple_get($this->API.'/order',$where));
        $data['order'] = $this->home->shopping_history($account_id);
        // print_r($data['order']); die;
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/shopping_history',$data);
        $this->load->view('komponen_buyer/footer');
    }

    public function shopping_history2(){
        $account_id = $this->session->userdata('account_id');
        $exp = array('payment_status' => 'Cancelled');
        // $where = array('account_id' => $account_id);
        // $params = array('product_id'=> $this->uri->segment(3));
        // $data['order'] = json_decode($this->curl->simple_get($this->API.'/order',$where));
        $data['order'] = $this->home->shopping_history2($account_id);
        // print_r($data['order']); die;
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/shopping_history',$data);
        $this->load->view('komponen_buyer/footer');
    }

    function shipping_status(){
        // print_r($id); die;
        $id = $this->input->post('order_id');
        $total = $this->input->post('total');
        $account_id = $this->input->post('account_id');
        $status = 'Already Received';
        $this->home->shipping_status_buyer($id,$status);
        $this->home->pay_to_seller($account_id,$total);
        redirect('buyer/home_buyer/shopping_history');

    }

    function comment(){
        // print_r($id); die;
       $a = $this->input->post('product_id');
       $b = $this->input->post('categori_id');
        $this->home->comment();
        redirect('buyer/home_buyer/product_detail/'.$a.'/'.$b);

    }

    public function invoice_history(){
        $account_id = $this->session->userdata('account_id');
        // print_r($account_id); die;
        
        // $where = array('order_id' => $id);
        // $params = array('product_id'=> $this->uri->segment(3));
        $data['invoice'] = $this->home->invoice_history($account_id);
        $data['saldo'] = $this->home->saldo_invoice($account_id);
        // print_r($data['saldo']); die;
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/invoice_history',$data);
        $this->load->view('komponen_buyer/footer');
    }

    public function invoice_history2(){
        $account_id = $this->session->userdata('account_id');
        // print_r($account_id); die;
        
        // $where = array('order_id' => $id);
        // $params = array('product_id'=> $this->uri->segment(3));
        $data['invoice'] = $this->home->invoice_history2($account_id);
        $data['saldo'] = $this->home->saldo_invoice($account_id);
        // print_r($data['saldo']); die;
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/invoice_history',$data);
        $this->load->view('komponen_buyer/footer');
    }

    public function payment(){
        // $account_id = $this->session->userdata('account_id');
        $invoice_id = $this->input->post('invoice_id');
        $price = $this->input->post('price');
        // $where = array('order_id' => $id);
        // $params = array('product_id'=> $this->uri->segment(3));
        $this->home->payment($invoice_id);
        $this->home->update_saldo($price);
        // print_r($data); die;
        redirect('buyer/home_buyer/invoice_history');
    }

    function verification(){
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/verification');
        $this->load->view('komponen_buyer/footer');
    }

   public function order(){
    $is_processed = $this->home->process();
    foreach ($this->cart->contents() as $key) {
                $id = $key['id'];
                $qtyAwal = $this->db->get_where('products',array('product_id' => $id))->row();
                $qtyAwalFix = $qtyAwal->stock;
                $qty = $key['qty'];
                $qtyAkhir = $qtyAwalFix - $qty;
    $stock = $this->home->stock($id,$qtyAkhir);
    }
    // $qty = $this->input->post('qty');
    // print_r($qtyAkhir); die;

        if($is_processed){
            $this->cart->destroy();
            redirect('buyer/Home_buyer/verification');
        }else{
            $this->session->set_flashdata('error','Gagal untuk memproses pesanan anda, tolong coba lagi!');
            redirect('buyer/Home_buyer/cart');
        }
    }

    // public function saldo()
    // {
    //     $id = $this->session->userdata('account_id');
    //     $saldo = $this->input->post('nominal');
    //     $voucher_id = $this->input->post('voucher_id');
    //     $this->home->saldo($id,$saldo);
    //     $this->home->status_voucher($voucher_id);
    //     redirect('buyer/home_buyer/invoice_history');
    // }

    public function voucher()
    {
        $id = $this->session->userdata('account_id');
        $data2['code'] = $this->home->saldo($id);
        // print_r($data2); die;
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/topup2', $data2);
        $this->load->view('komponen_buyer/footer');
    }

    public function voucher2()
    {
        $id = $this->session->userdata('account_id');
        $data2['code'] = $this->home->saldo2($id);
        // print_r($data2); die;
        $this->load->view('komponen_buyer/header');
        $this->load->view('buyer/topup', $data2);
        $this->load->view('komponen_buyer/footer');
    }

    function logout(){
        $this->cart->destroy();
        $this->session->sess_destroy();
        redirect('index');
    }

     function topup(){
        $nominal = $this->input->post('nominal');
        $status = 'Not Used';
        $id = $this->session->userdata('account_id');
        $this->home->topup($nominal,$id,$status);
        redirect('buyer/home_buyer/voucher');

    }

    


}

