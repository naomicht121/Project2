<?php
Class Bank extends CI_Controller{
    
    var $API ="";
    
    function __construct() {
        parent::__construct();
        $this->API="http://localhost/uas_bank_server/index.php";
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->library('pagination');
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('home');
    }

    function topup(){
        $id = $this->session->userdata('account_id');
        $uniq_key = $this->input->post('uniq_key');
        $nominal = $this->input->post('nominal');
        $where = array(
            'uniq_key' => $uniq_key,
            'nominal' => $nominal
            );
        $cek = json_decode($this->curl->simple_get($this->API.'/bank',$where));
        // print_r($cek); die;
        if ($cek) {
            // echo "aw"; die;
            $this->home->tambah_saldo($id,$nominal);
            $this->home->status_topup($uniq_key);
            // $this->session->set_flashdata('hasil','Saldo Was Successfully Added');
            echo "<script>alert('Saldo Was Successfully Added');history.go(-1);</script>";


        }else{
           echo "<script>alert('Pay This Unique Code In Bank!');history.go(-1);</script>";
        }

    }

}