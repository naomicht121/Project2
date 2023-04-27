<?php
Class Index extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/uas_server/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->library('pagination');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('home');
    }

    function index($key = null){
        $key = array(
            'search' => $this->input->get('search')
            );
        if ($key == '') {
                // print_r($uri); die;
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/product'));
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('index',$data);
            }elseif ($this->uri->segment(3)){
                $uri = array(
                        'uri' => $this->uri->segment(3)
                        );    
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/ProductCategory',$uri));
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('index',$data); 
            }elseif ($key != ''){
                $data['barang'] = json_decode($this->curl->simple_get($this->API.'/productspec',$key));
        // $ab = $this->input->get('search');
        // print_r($ab); die;
                $data['category'] = json_decode($this->curl->simple_get($this->API.'/category'));
                $this->load->view('index',$data);
            }
        }

        function product_detail($id,$kid){
        $where = array(
                        'product_id' => $id,
                        'categori_id' => $kid
            );
        $data['barang'] = json_decode($this->curl->simple_get($this->API.'/product_detail', $where));
        $data['related'] = json_decode($this->curl->simple_get($this->API.'/chose_category', $where));
        $data['comment'] = json_decode($this->curl->simple_get($this->API.'/comment', $where));
        $this->load->view('product_detail',$data);
    }

    function form_login(){
        $this->load->view('login');
    }

    function form_registration(){
        $this->load->view('registration');
    }

    function registration(){
        $config['upload_path'] = './assets/profile'; //path folder
         // $config['upload_path'] = "echo base_url()/assets/gambar_product"; //path folder
         $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan


         $this->load->library('upload', $config);
         if (!$this->upload->do_upload('image')){
            $error = $this->upload->display_errors();
            print_r($error);
         }else{
            $result = $this->upload->data();
            $img_name = $result['file_name'];

          $data_account = array (
                        'image' => $img_name ,
                        'username' => $this->input->post('username'),
                        'password' => $this->input->post('password'),
                        'name' => $this->input->post('name'),
                        'email' => $this->input->post('email'),
                        'address' => $this->input->post('address'),
                        'city' => $this->input->post('city'),
                        'telp' => $this->input->post('telp'),
                        'rekening' => $this->input->post('rekening'),
                        'grup' => '2'
                    );
                        // print_r($data_product); die;
                    $this->curl->simple_post($this->API.'/account', $data_account,  array(CURLOPT_BUFFERSIZE => 10));
                    redirect('index/form_login');
                }
    }

    
function cek_login(){ 
        $where = array(
               'username' => $this->input->post('username'),
               'password' => $this->input->post('password')
            );
        $cek = json_decode($this->curl->simple_get($this->API.'/login_seller',$where));
         if ($cek) {
            foreach ($cek as $sess) {
                $sess_data['account_id'] = $sess->account_id;
                $sess_data['name'] = $sess->name;
                $sess_data['grup'] = $sess->grup;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('grup')=='1') {
                redirect('home_admin');
            }
            elseif ($this->session->userdata('grup')=='2') {
                redirect('buyer/home_buyer');
            }   
        }else{
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
}


    function cek_login2(){
        $data = array('username' => $this->input->post('username'),
                        'password' => $this->input->post('password')
            );
        $hasil = $this->home->login($data);
        if ($hasil->num_rows() == 1) {
            foreach ($hasil->result() as $sess) {
                $sess_data['account_id'] = $sess->account_id;
                $sess_data['name'] = $sess->name;
                $sess_data['grup'] = $sess->grup;
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('grup')=='1') {
                redirect('home_admin');
            }
            elseif ($this->session->userdata('grup')=='2') {
                redirect('buyer/home_buyer');
            }   
        }else{
            echo "<script>alert('Gagal login: Cek username, password!');history.go(-1);</script>";
        }
        
    }
}