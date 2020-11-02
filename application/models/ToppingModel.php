<?php


class ToppingModel extends CI_Model
{
	public function __construct()
	{
	}

	public function getToppings()
	{
		$query = $this->db->get('toppings');
		return $query->result_array();
	}
}
