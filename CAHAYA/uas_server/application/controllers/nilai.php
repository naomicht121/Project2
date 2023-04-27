<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class nilai extends REST_Controller {
function __construct($config = 'rest') {
parent::__construct($config);
$this->load->database();
}
//Menampilkan data kontak
function index_get() {
$id_nilai = $this->get('id_nilai');
if ($id_nilai == '') {
$kontak = $this->db->get('nilai')->result();
} else {
$this->db->where('id_nilai', $id_nilai);
$kontak = $this->db->get('nilai')->result();
}
$this->response($kontak, 200);
}
//Mengirim atau menambah data kontak baru
function index_post() {
$data = array(
'id_nilai' => $this->post('id_nilai'),
'id_matkul' => $this->post('id_matkul'),
'id_siswa' => $this->post('id_siswa'),
'nilai' => $this->post('nilai'),
);
$insert = $this->db->insert('nilai', $data);
if ($insert) {
$this->response($data, 200);
} else {
$this->response(array('status' => 'fail', 502));
}
}

//Memperbarui data kontak yang telah ada
function index_put() {
$id_nilai = $this->put('id_nilai');
$data = array(
'id_nilai' => $this->put('id_nilai'),
'id_matkul' => $this->put('id_matkul'),
'id_siswa' => $this->put('id_siswa'),
'nilai' => $this->put('nilai'),
);
$this->db->where('id_nilai', $id_nilai);
$update = $this->db->update('nilai', $data);
if ($update) {
$this->response($data, 200);
} else {
$this->response(array('status' => 'fail', 502));
}
}

//Menghapus salah satu data kontak
function index_delete() {
$id_nilai = $this->delete('id_nilai');
$this->db->where('id_nilai', $id_nilai);
$delete = $this->db->delete('nilai');
if ($delete) {
$this->response(array('status' => 'success'), 201);
} else {
$this->response(array('status' => 'fail', 502));
}
}


}
?>