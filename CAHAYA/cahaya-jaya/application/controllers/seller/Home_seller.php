<?php
Class Home_seller extends CI_Controller{
    
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

        if($this->session->userdata('account_id') == "" and
            $this->session->userdata('name') == ""){
            redirect(base_url("index"));
            }
    }

    function form_create_product(){
        $data['category'] = $this->home->category();
        $this->load->view('komponen_seller/header');
        $this->load->view('seller/create_product',$data);
        $this->load->view('komponen_seller/footer');
    }

    function index(){
        $account_id = $this->session->userdata('account_id');
        $exp = array('payment_status' => 'Cancelled');
        // $where = array('account_id' => $account_id);
        // $params = array('product_id'=> $this->uri->segment(3));
        // $data['order'] = json_decode($this->curl->simple_get($this->API.'/order',$where));
        $data['product'] = $this->home->my_product($account_id);
        $data['category'] = $this->home->category_product($account_id);
        // print_r($data); die;
        $this->load->view('komponen_seller/header');
        $this->load->view('seller/index_seller',$data);
        $this->load->view('komponen_seller/footer');
    }

    function create_product() {
    	 $config['upload_path'] = './assets/gambar_product'; //path folder
    	 // $config['upload_path'] = "echo base_url()/assets/gambar_product"; //path folder
         $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan


         $this->load->library('upload', $config);
         if (!$this->upload->do_upload('product_image')){
         	$error = $this->upload->display_errors();
         	print_r($error);
         }else{
        	$result = $this->upload->data();
        	$img_name = $result['file_name'];

        $data_product = array(
                    'account_id'     => $this->input->post('account_id'),
                    'product_name'     => $this->input->post('product_name'),
                    'description'    => $this->input->post('description'),
                    'categori_id'    => $this->input->post('categori_id'),
                    'price'       => $this->input->post('price'),
                    'stock'      => $this->input->post('stock'),
                    'product_image'         => $img_name
                    );
         $insert =  $this->curl->simple_post($this->API.'/product', $data_product, array(CURLOPT_BUFFERSIZE => 10)); 
            if($insert)
            {
            // print_r($data); die;
                echo"<script>
                alert('Succes')
                </script>";
                redirect('seller/home_seller');
            }
            else
            {
            echo"<script>
                alert('Fail making product, check data again!')
                </script>";
                $this->load->view('komponen_seller/header');
        $this->load->view('seller/create_product');
        $this->load->view('komponen_seller/footer');
            }
         }
            }

    function delete_product($product_id){
        if(empty($product_id)){
            redirect('seller/home_seller');
        }else{
            $delete = $this->curl->simple_delete($this->API.'/product', array('product_id'=>$product_id), array(CURLOPT_BUFFERSIZE => 10));
            redirect('seller/home_seller');
        }
    }

    public function order_in(){
        $account_id = $this->session->userdata('account_id');
        $data['order'] = $this->home->order_in($account_id);
        // print_r($data); die;
        $this->load->view('komponen_seller/header');
        $this->load->view('seller/order_in',$data);
        $this->load->view('komponen_seller/footer');
    }

    public function order_in2(){
        $account_id = $this->session->userdata('account_id');
        $data['order'] = $this->home->order_in2($account_id);
        // print_r($data); die;
        $this->load->view('komponen_seller/header');
        $this->load->view('seller/order_in2',$data);
        $this->load->view('komponen_seller/footer');
    }

    public function order_in3(){
        $account_id = $this->session->userdata('account_id');
        $data['order'] = $this->home->order_in3($account_id);
        // print_r($data); die;
        $this->load->view('komponen_seller/header');
        $this->load->view('seller/order_in2',$data);
        $this->load->view('komponen_seller/footer');
    }

    function shipping_status(){
        // print_r($id); die;
        $id = $this->input->post('order_id');
        $resi = $this->input->post('resi');
        $courier = $this->input->post('courier');
        $status = 'On Delivery';
        $this->home->shipping_status($id,$status,$resi,$courier);
        redirect('seller/home_seller/order_in2');

    }

     public function update_product()
    {
        
        $config['upload_path'] = './assets/gambar_product'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan


         $this->load->library('upload', $config);
         if ( ! $this->upload->do_upload('product_image')){

        // $id = $this->input->post('account_id');
        // $data = array('account_id' => $id);
                    $data = array (
                        'product_image' => $this->input->post('product_image2'),
                        'product_name' => $this->input->post('product_name'),
                        'description' => $this->input->post('description'),
                        'categori_id' => $this->input->post('categori_id'),
                        'price' => $this->input->post('price'),
                        'stock' => $this->input->post('stock'),
                        'product_id' => $this->input->post('product_id')
                    );
                        // print_r($data_product); die;
                    $this->curl->simple_put($this->API.'/product', $data,  array(CURLOPT_BUFFERSIZE => 10));
                    redirect('seller/home_seller');
         }else{
        // $id = $this->input->post('account_id');
        // $data = array('account_id' => $id);

            $image = $this->upload->data();
                    $data = array (
                        'product_image' => $image['file_name'] ,
                        'product_name' => $this->input->post('product_name'),
                        'description' => $this->input->post('description'),
                        'categori_id' => $this->input->post('categori_id'),
                        'price' => $this->input->post('price'),
                        'stock' => $this->input->post('stock'),
                        'product_id' => $this->input->post('product_id')
                    
                    );
                        // print_r($data_product); die;
                    $this->curl->simple_put($this->API.'/product', $data,  array(CURLOPT_BUFFERSIZE => 10));
                    redirect(base_url('seller/home_seller'));
                }

    }


     function pagenation_product(){
 
        //konfigurasi pagination
        $config['base_url'] = site_url('mahasiswa/index'); //site url
        $config['total_rows'] = $this->db->count_all('product'); //total row
        $config['per_page'] = 5;  //show record per halaman
        $config["uri_segment"] = 3;  // uri parameter
        $choice = $config["total_rows"] / $config["per_page"];
        $config["num_links"] = floor($choice);
 
        // Membuat Style pagination untuk BootStrap v4
      $config['first_link']       = 'First';
        $config['last_link']        = 'Last';
        $config['next_link']        = 'Next';
        $config['prev_link']        = 'Prev';
        $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination justify-content-center">';
        $config['full_tag_close']   = '</ul></nav></div>';
        $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
        $config['num_tag_close']    = '</span></li>';
        $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
        $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['next_tagl_close']  = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['prev_tagl_close']  = '</span>Next</li>';
        $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close']  = '</span></li>';
 
        $this->pagination->initialize($config);
        $data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 
        //panggil function get_mahasiswa_list yang ada pada mmodel mahasiswa_model. 
        $data['product'] = $this->home_model->get_product_list($config["per_page"], $data['page']);           
 
        $data['pagination'] = $this->pagination->create_links();
 
        //load view mahasiswa view
        $this->load->view('seller/index_seller',$data);
    }
        

}