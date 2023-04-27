<?php
Class matkul extends CI_Controller{
var $API ="";
function __construct() {
parent::__construct();
$this->API="http://localhost/ci_server/index.php";
$this->load->library('session');
$this->load->library('curl');
$this->load->helper('form');
$this->load->helper('url');
}
// menampilkan data kontak
function index(){
$data['datamatkul'] = json_decode($this->curl->simple_get($this->API.'/matkul'));
$this->load->view('matkul/list_matkul',$data);
}
// insert data kontak
function create(){
if(isset($_POST['submit'])){
$data = array(
'id_matkul' => $this->input->post('id_matkul'),
'nama_matkul' => $this->input->post('nama_matkul'),
);
$insert = $this->curl->simple_post($this->API.'/matkul', $data, array(CURLOPT_BUFFERSIZE => 10));
if($insert)
{
$this->session->set_flashdata('hasil','Insert Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Insert Data Gagal');
}
redirect('matkul');
}else{
$this->load->view('matkul/create_matkul');
}
}
// edit data kontak
function edit(){
if(isset($_POST['submit'])){
$data = array(
'id_matkul' => $this->input->post('id_matkul'),
'nama_matkul' => $this->input->post('nama_matkul'),
);
$update = $this->curl->simple_put($this->API.'/matkul', $data, array(CURLOPT_BUFFERSIZE => 10));
if($update)
{
$this->session->set_flashdata('hasil','Update Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Update Data Gagal');
}
redirect('matkul');
}else{
$params = array('id_matkul'=> $this->uri->segment(3));
$data['datamatkul'] = json_decode($this->curl->simple_get($this->API.'/matkul',$params));
$this->load->view('matkul/edit_matkul',$data);
}
}
// delete data kontak
function delete($id_matkul){
if(empty($id_matkul)){
redirect('matkul');
}else{
$delete = $this->curl->simple_delete($this->API.'/matkul', array('id_matkul'=>$id_matkul), array(CURLOPT_BUFFERSIZE => 10));
if($delete)
{
$this->session->set_flashdata('hasil','Delete Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Delete Data Gagal');
}
redirect('matkul');
}
}
}