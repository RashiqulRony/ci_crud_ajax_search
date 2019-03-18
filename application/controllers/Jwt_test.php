<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . '/libraries/implementJWT.php';

class Jwt_test extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct(){
		parent::__construct();
		$this->objOfJwt = new implementJWT();
		header('Content-Type: application/json');
	}

	public function loginToken(){
		$tokenData['userID'] = '123456';
		$tokenData['role'] = 'Customer';
		$tokenData['time'] = date('Y-m-d h:i:s');
		$jwtToken = $this->objOfJwt->GenerateToken($tokenData);
		echo json_encode(array('Token' => $jwtToken));
	}

	public function userInfo(){
		$users = array(
			'user_name'    => 'Rashyqul Rony',
			'user_email'   => 'Rashyqul@teechnobd.com',
			'user_phone'   => '+8801738030343',
			'user_address' => 'Shyamoli, Dhaka - 1208, Bangladesh',
		);

		echo json_encode($users);
	}






}
