<?php
Class Home_admin extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/uas_server/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->library('cart');
        $this->load->library('pagination');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('home');

        if($this->session->userdata('account_id') == "" and
            $this->session->userdata('grup') == ""){
            redirect(base_url("index"));
            }
    }

    public function index(){
        $data['order'] = $this->home->shopping_history_admin();
        // $data['buyer'] = $this->home->shopping_history_admin_buyer();
        // print_r($data['order']); die;
        $this->load->view('admin/index_admin',$data);
    }

    public function index2(){
        $data['order'] = $this->home->shopping_history_admin2();
        // $data['buyer'] = $this->home->shopping_history_admin_buyer();
        // print_r($data['order']); die;
        $this->load->view('admin/index_admin',$data);
    }

    public function clear_payment(){
        $price = $this->input->post('price');
        $account_id = $this->input->post('account_id');
        $order_id = $this->input->post('order_id');
        $this->home->clear_payment($price,$account_id);
        $this->home->clear_status($order_id);
        // $data['buyer'] = $this->home->shopping_history_admin_buyer();
        // print_r($data['order']); die;
        redirect('home_admin/index2');
    }

    public function category(){
        $data['category'] = $this->home->category_admin();
        // $data['buyer'] = $this->home->shopping_history_admin_buyer();
        // print_r($data['order']); die;
        $this->load->view('admin/category',$data);
    }

    function delete_category($categori_id){
        if(empty($categori_id)){
            redirect('home_admin/category');
        }else{
            $delete = $this->curl->simple_delete($this->API.'/category', array('categori_id'=>$categori_id), array(CURLOPT_BUFFERSIZE => 10));
            redirect('home_admin/category');
        }
    }

    function input(){
     $data = array(
        'category' => $this->input->post('category') 
        );
     $this->curl->simple_post($this->API.'/category', $data, array(CURLOPT_BUFFERSIZE => 10));
     redirect('home_admin/category');
    }

}