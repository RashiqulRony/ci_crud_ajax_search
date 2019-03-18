<?php
class Product_model extends CI_Model{

	function product_list(){
		$hasil=$this->db->get('product');
		return $hasil->result();
	}

	function save_product(){

		if(isset($_FILES["product_image"]["name"]))
		{
			$config['upload_path'] = './upload/';
			$config['allowed_types'] = 'jpg|jpeg|png|gif';
			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('image_file'))
			{
				echo $this->upload->display_errors();
			}
			else
			{
				$data = $this->upload->data();
				$product_image = $_FILES["product_image"]["name"];
			}
		}

		$data = array(
				'product_code' 	=> $this->input->post('product_code'), 
				'product_name' 	=> $this->input->post('product_name'), 
				'product_price' => $this->input->post('price'), 
				'product_image' => $product_image,
			);
		$result=$this->db->insert('product',$data);
		return $result;
	}

	function update_product (){
		$product_code=$this->input->post('product_code');
		$product_name=$this->input->post('product_name');
		$product_price=$this->input->post('price');

		$this->db->set('product_name', $product_name);
		$this->db->set('product_price', $product_price);
		$this->db->where('product_code', $product_code);
		$result=$this->db->update('product');
		return $result;
	}

	function delete_product(){
		$product_code=$this->input->post('product_code');
		$this->db->where('product_code', $product_code);
		$result=$this->db->delete('product');
		return $result;
	}
	
}
