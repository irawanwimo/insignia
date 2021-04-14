<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

class Order extends CI_Controller {
	public function __construct()
    {
		parent::__construct();
        $this->load->library('session');
		$this->load->model('Order_model');
	}
	
	public function index()
	{
		$data = array();
		$this->template->set('title', 'Orders');
		$this->template->set('menu_active', 'Orders');

		$data['orders'] = $this->Order_model->get();
		// echo "<pre>";print_r($data);exit;

		$this->template->load('default_layout', 'contents' , 'order', $data);
	}
}