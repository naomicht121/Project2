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
    }

    function index(){
        $this->load->view('index_bank');
    }
    function input(){ 
        $data = array(
               'uniq_key'      => $this->input->post('uniq_key'),
               'nominal'       => $this->input->post('nominal')
            );
        $this->curl->simple_post($this->API.'/bank', $data);
        redirect('bank');
}

}

 