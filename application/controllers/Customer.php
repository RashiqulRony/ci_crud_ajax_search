<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Customer extends CI_Controller {

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
		$this->load->model('customer_model');
	}


	public function index($data = NULL)
	{
		$this->load->helper('html');
		$this->load->model('customer_model');
		$data['title'] = 'Customer Info';
		$data['content'] = 'customer';
		$data['customers'] = $this->customer_model->get_customer();
		$this->load->view('layout', $data);
	}

	public function add_customer(){
//		echo 'Success';
		$this->load->library('form_validation');
		$this->load->library('upload');

		$this->form_validation->set_rules("name", "Name", "required");
		$this->form_validation->set_rules("email", "Email", "required");
		$this->form_validation->set_rules("phone", "Phone", "required");

		if ($this->form_validation->run()){
			$this->load->model('customer_model');
			$data = array(
				"name"	 => $this->input->post("name"),
				"email"	 => $this->input->post("email"),
				"phone"	 => $this->input->post("phone"),
				"image"	 => $this->input->post(""),
			);

			if ($this->input->post("update")){
				$this->customer_model->update_customer_data($data, $this->input->post('customer_id'));
			}else{
				$this->customer_model->add_customer($data);
			}

			redirect(base_url()."customer");
		}else{
			$this->load->model('customer_model');
			$data['title'] = 'Customer Info';
			$data['content'] = 'customer';

			$data['name'] = $this->input->post("name");
			$data['email'] = $this->input->post("email");
			$data['phone'] = $this->input->post("phone");

			$data['customers'] = $this->customer_model->get_customer();
			$this->load->view('layout', $data);
		}
	}

	public function delete_data(){
		$id = $this->uri->segment(3);
		$this->load->model('customer_model');
		$this->customer_model->delete_customer($id);
		redirect(base_url()."customer");
	}

	public function update_data(){
		$id = $this->uri->segment(3);
		$this->load->model('customer_model');
		$data['customer_data'] = $this->customer_model->update_customer($id);
		$data['customers'] = $this->customer_model->get_customer();
		$data['content'] = 'customer';
		$this->load->view('layout', $data);
	}



}
