<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barry extends CI_Controller {
	public function index()
	{
		$this->load->view('AllenView');
	}
	public function Coppy(){
		$this->load->view('welcome_message');
	}
}
