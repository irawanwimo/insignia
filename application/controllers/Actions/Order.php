<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require 'vendor/autoload.php';

class Order extends CI_Controller {
        public function __construct()
        {
                parent::__construct();
                $this->load->Model('Order_model');
                $this->load->library('session');
        }
	
	public function create()
	{
                $post = $this->input->post();
                $post['create_date'] = date('Y-m-d H:i:s', strtotime('+7 hours'));
                $create = $this->Order_model->create($post);
                
                $this->session->set_flashdata('succ_pass_message', 'Order Created Successfully');
                redirect('order');
	}
}