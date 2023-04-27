<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class siswa extends REST_Controller {
function __construct($config = 'rest') {
parent::__construct($config);
$this->load->database();
}

//Menampilkan data kontak
function index_get() {
$id_siswa = $this->get('id_siswa');
if ($id_siswa == '') {
$kontak = $this->db->get('siswa')->result();
} else {
$this->db->where('id_siswa', $id_siswa);
$kontak = $this->db->get('siswa')->result();
}
$this->response($kontak, 200);
}
//Mengirim atau menambah data kontak baru
function index_post() {
$data = array(
'id_siswa' => $this->post('id_siswa'),
'nama_siswa' => $this->post('nama_siswa'),
);
$insert = $this->db->insert('siswa', $data);
if ($insert) {
$this->response($data, 200);
} else {
$this->response(array('status' => 'fail', 502));
}
}

//Memperbarui data kontak yang telah ada
function index_put() {
$id_siswa = $this->put('id_siswa');
$data = array(
'id_siswa' => $this->put('id_siswa'),
'nama_siswa' => $this->put('nama_siswa'),
);
$this->db->where('id_siswa', $id_siswa);
$update = $this->db->update('siswa', $data);
if ($update) {
$this->response($data, 200);
} else {
$this->response(array('status' => 'fail', 502));
}
}

//Menghapus salah satu data kontak
function index_delete() {
$id_siswa = $this->delete('id_siswa');
$this->db->where('id_siswa', $id_siswa);
$delete = $this->db->delete('siswa');
if ($delete) {
$this->response(array('status' => 'success'), 201);
} else {
$this->response(array('status' => 'fail', 502));
}
}
}