<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class matkul extends REST_Controller {
function __construct($config = 'rest') {
parent::__construct($config);
$this->load->database();
}

//Menampilkan data kontak
function index_get() {
$id_matkul = $this->get('id_matkul');
if ($id_matkul == '') {
$kontak = $this->db->get('matkul')->result();
} else {
$this->db->where('id_matkul', $id_matkul);
$kontak = $this->db->get('matkul')->result();
}
$this->response($kontak, 200);
}
//Mengirim atau menambah data kontak baru
function index_post() {
$data = array(
'id_matkul' => $this->post('id_matkul'),
'nama_matkul' => $this->post('nama_matkul'),
);
$insert = $this->db->insert('matkul', $data);
if ($insert) {
$this->response($data, 200);
} else {
$this->response(array('status' => 'fail', 502));
}
}

//Memperbarui data kontak yang telah ada
function index_put() {
$id_matkul = $this->put('id_matkul');
$data = array(
'id_matkul' => $this->put('id_matkul'),
'nama_matkul' => $this->put('nama_matkul'),
);
$this->db->where('id_matkul', $id_matkul);
$update = $this->db->update('matkul', $data);
if ($update) {
$this->response($data, 200);
} else {
$this->response(array('status' => 'fail', 502));
}
}

//Menghapus salah satu data kontak
function index_delete() {
$id_matkul = $this->delete('id_matkul');
$this->db->where('id_matkul', $id_matkul);
$delete = $this->db->delete('matkul');
if ($delete) {
$this->response(array('status' => 'success'), 201);
} else {
$this->response(array('status' => 'fail', 502));
}
}
}