<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Recipe_Model extends CI_Model {
	public function Recipe_Data(){
		$result = $this->db->get('recipe');
		return $result->result_array();
	}
	public function Insert_Data($data){
		$this->db->insert('recipe', $data);

	}
	
}
