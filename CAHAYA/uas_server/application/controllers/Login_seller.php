<?php

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;

class Login_seller extends REST_Controller {

		function __construct($config = 'rest') {
			parent::__construct($config);
			$this->load->database();
        }

 //        function index_get(){
	// 				$username =	$this->get('username');
	// 				$password = $this->get('password');

	// 	$hasil = $this->db->query("SELECT * FROM seller WHERE username = $username AND password = $password");
	// 		// $hasil = $this->db->get_where('seller',array('username' => $username , 'passowrd' => $password ));		
	// 	if ($hasil->num_rows() == 1) {
	// 		$this->response($hasil, 200);
	// 		}		
	// 	else {
	// 		$this->response(array('status' => 'fail', 502));
	// 	}
		
	// }

	
// 					$username =	$this->get('username');
// 					$password = $this->get('password');
// if ($username->num_rows() == 1 and $password->num_rows == 1) {
// $kontak = $this->db->get('buyer')->result();
// } else {
// $this->db->where('id_matkul','password', $id_matkul,$password);
// $kontak = $this->db->get('buyer')->result();
// }
// $this->response($kontak, 200);
// }
   function index_get() {
        $username = $this->get('username');
        $password = $this->get('password');
        if ($username == '' and $password == '') {
            $account = $this->db->get('account')->result();
        } else {
            $this->db->where(array('username' => $username, 'password' => $password));
            $account = $this->db->get('account')->result();
        }
        $this->response($account, 200);
    }

    // function index_get() {
    //     $username = $this->post('username');
    //     $password = $this->post('password');
    //     if ($username == '' and $password == '') {
    //         $account = $this->db->get('account')->result();
    //     } else {
    //         $account = $this->db->get_where('account', array('username' => $username, 'password' => $password)->result();            
    //         $account = $this->db->get('account')->result();
    //     }
    //     $this->response($account, 200);
    // }

}
?>