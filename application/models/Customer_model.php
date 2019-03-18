<?php
/**
 * Created by PhpStorm.
 * User: rashiqul
 * Date: 2/7/19
 * Time: 10:30 AM
 */

class Customer_model extends CI_Model {
	public function get_customer(){
//		$customers = $this->db->get('customers');  //query("SELECT * FROM customers")
		$customers = $this->db->get_where('customers');  //query("SELECT * FROM customers")
		return $customers;
	}

	public function add_customer($data){
		$this->db->insert("customers", $data);
	}

	public function delete_customer($id){
		$this->db->where("id", $id);
		$this->db->delete("customers");
	}

	public function update_customer($id){
		$this->db->where("id", $id);
		$customer = $this->db->get("customers"); //query("SELECT * FROM customers WHERE id = $id")
		return $customer;
	}

	public function update_customer_data($data, $id){
		$this->db->where("id", $id);
		$this->db->update("customers", $data); //query("UPDATE customers SET name = '$name', email = '$email', phone = 'phone' WHERE id = $id")
	}


	//REST API Functions
	public function getCustomer(){
		$this->db
			->select('*')
			->from('customers')
			->order_by("id", "desc")
		;
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->result();
		}
		return array();
	}

	public function getNewsCustomerById($id) {
		$this->db->select('*')->from('customers')
			->where('id', $id)
		;
		$query = $this->db->get();
		if ($query->num_rows() > 0) {
			return $query->row();
		}
		return array();
	}

	public function customerCreate($data) {
		$this->db->insert('customers', $data);
		return $this->db->affected_rows();
	}

	public function customerDelete($id = 1) {
		$this->db->delete('customers', array(1 => $id));
		return $this->db->affected_rows();
	}

	// update the information
	public function customerUpdate($data, $id) {
		if ($this->db->update('customers', $data, $id . " = " . $id)) {
			return TRUE;
		} else {
			return FALSE;
		}
	}


}
