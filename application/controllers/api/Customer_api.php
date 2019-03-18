<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Customer_api extends CI_Controller{

	public function __construct(){
		parent::__construct();
		header('Access-Control-Allow-Origin: *');
		header('Content-Type: application/json');
		header('Access-Control-Allow-Methods: POST');
		header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, X-Authorization-With');
		$this->load->model('customer_model');
	}

	public function getCustomer(){
		$data['customers'] = $customers = $this->customer_model->getCustomer();
		echo json_encode(array('Customers' => $customers));
	}

	public function getSingleCustomer(){
		$customer = $this->customer_model->getNewsCustomerById();
		echo json_encode(array('Customer' => $customer));
	}

	public function addCustomer(){
//		$data = json_decode(file_get_contents("php://input"));
		$data = array(
			"name"	 => "Mr. Ismail Hosen",
			"email"	 => "ismail@gmail.com",
			"phone"	 => "1234567",
		);
		if ($this->customer_model->customerCreate($data)){
			echo json_encode(array('message' => 'Customer Saved'));
		}else{
			echo json_encode(array('error' => 'Customer Data not found'));
		}
	}

	public function updateCustomer($id){
//		$data = json_decode(file_get_contents("php://input"));
		$data = array(
			"name"	 => "Mr. Robi Ul islam",
			"email"	 => "robi@gmail.com",
			"phone"	 => "1234567",
		);
		if ($this->customer_model->customerUpdate($data, $id)){
			echo json_encode(array('message' => 'Customer Saved'));
		}else{
			echo json_encode(array('error' => 'Customer Data not found'));
		}
	}




}
