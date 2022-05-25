<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Home';

		$this->load->view('home/templates/header', $data);
		$this->load->view('home/index');
		$this->load->view('home/templates/footer');
	}
}
