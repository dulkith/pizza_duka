<?php


class ToppingModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getToppings()
	{
		$query = $this->db->get('toppings');
		return $query->result_array();
	}
}
