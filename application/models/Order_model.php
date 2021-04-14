<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Order_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get()
    {
		$data_order = $this->db->select('*')
                            ->from('orders')
                            ->order_by('id', 'DESC')
								            ->get()->result_array();
								
		return $data_order;
    }

    public function create($data_order)
    {
      return $this->db->insert('orders', $data_order);
    }

}
