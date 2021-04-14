<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

class Home extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
        $this->load->library('session');
		$this->load->model('Order_model');
	}
	
	public function index()
	{
		$data = array();
		$this->template->set('title', 'Dashboard');

		$data['orders'] = $this->Order_model->get();

		$this->template->load('default_layout', 'contents' , 'home', $data);
	}
}