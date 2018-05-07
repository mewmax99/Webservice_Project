<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barry extends CI_Controller {
	public function index()
	{
		$this->load->view('Homepage');
	}
	public function Coppy(){
		$this->load->view('Hotel_View');
	}
}
