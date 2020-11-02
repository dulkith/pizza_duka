<?php


class OrderModel extends CI_Model
{
	public function __construct()
	{
	}

	public function saveOrder($newOrder)
	{
		// save order data into db
		$result = $this->db->insert('orders', $newOrder);
		return $result ? $this->db->insert_id() : false;
	}
}
