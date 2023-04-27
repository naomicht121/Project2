<?php
Class nilai extends CI_Controller{
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
$data['datanilai'] = json_decode($this->curl->simple_get($this->API.'/nilai'));
$this->load->view('kontak/list',$data);
}
// insert data kontak
function create(){
if(isset($_POST['submit'])){
$data = array(
'id_nilai' => $this->input->post('id_nilai'),
'id_matkul' => $this->input->post('id_matkul'),
'id_siswa' => $this->input->post('id_siswa'),
'nilai' => $this->input->post('nilai'),
);
$insert = $this->curl->simple_post($this->API.'/nilai', $data, array(CURLOPT_BUFFERSIZE => 10));
if($insert)
{
$this->session->set_flashdata('hasil','Insert Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Insert Data Gagal');
}
redirect('nilai');
}else{
$this->load->view('kontak/create');
}
}
// edit data kontak
function edit(){
if(isset($_POST['submit'])){
$data = array(
'id_nilai' => $this->input->post('id_nilai'),
'id_matkul' => $this->input->post('id_matkul'),
'id_siswa' => $this->input->post('id_siswa'),
'nilai' => $this->input->post('nilai')
);
$update = $this->curl->simple_put($this->API.'/nilai', $data, array(CURLOPT_BUFFERSIZE => 10));
if($update)
{
$this->session->set_flashdata('hasil','Update Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Update Data Gagal');
}
redirect('nilai');
}else{
$params = array('id_nilai'=> $this->uri->segment(3));
$data['datanilai'] = json_decode($this->curl->simple_get($this->API.'/nilai',$params));
$this->load->view('kontak/edit',$data);
}
}
// delete data kontak
function delete($id_nilai){
if(empty($id_nilai)){
redirect('nilai');
}else{
$delete = $this->curl->simple_delete($this->API.'/nilai', array('id_nilai'=>$id_nilai), array(CURLOPT_BUFFERSIZE => 10));
if($delete)
{
$this->session->set_flashdata('hasil','Delete Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Delete Data Gagal');
}
redirect('nilai');
}
}
}