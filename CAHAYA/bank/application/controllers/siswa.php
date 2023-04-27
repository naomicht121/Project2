<?php
Class siswa extends CI_Controller{
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
$data['datasiswa'] = json_decode($this->curl->simple_get($this->API.'/siswa'));
$this->load->view('siswa/list_siswa',$data);
}
// insert data kontak
function create(){
if(isset($_POST['submit'])){
$data = array(
'id_siswa' => $this->input->post('id_siswa'),
'nama_siswa' => $this->input->post('nama_siswa'),
);
$insert = $this->curl->simple_post($this->API.'/siswa', $data, array(CURLOPT_BUFFERSIZE => 10));
if($insert)
{
$this->session->set_flashdata('hasil','Insert Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Insert Data Gagal');
}
redirect('siswa');
}else{
$this->load->view('siswa/create_siswa');
}
}
// edit data kontak
function edit(){
if(isset($_POST['submit'])){
$data = array(
'id_siswa' => $this->input->post('id_siswa'),
'nama_siswa' => $this->input->post('nama_siswa')
);
$update = $this->curl->simple_put($this->API.'/siswa', $data, array(CURLOPT_BUFFERSIZE => 10));
if($update)
{
$this->session->set_flashdata('hasil','Update Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Update Data Gagal');
}
redirect('siswa');
}else{
$params = array('id_siswa'=> $this->uri->segment(3));
$data['datasiswa'] = json_decode($this->curl->simple_get($this->API.'/siswa',$params));
$this->load->view('siswa/edit_siswa',$data);
}
}
// delete data kontak
function delete($id_siswa){
if(empty($id_siswa)){
redirect('siswa');
}else{
$delete = $this->curl->simple_delete($this->API.'/siswa', array('id_siswa'=>$id_siswa), array(CURLOPT_BUFFERSIZE => 10));
if($delete)
{
$this->session->set_flashdata('hasil','Delete Data Berhasil');
}else
{
$this->session->set_flashdata('hasil','Delete Data Gagal');
}
redirect('siswa');
}
}
}