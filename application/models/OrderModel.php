<?php

/**
 * Class OrderModel
 * Pizza NoW! online order system order model class
 */
class OrderModel extends CI_Model
{
	public function __construct()
	{
	}

	public function getOrderById($id)
	{
		// find order by order id
		$query = $this->db->get_where('orders', array('id' => $id));
		// return order data
		return $query->row_array();
	}

	public function saveOrder($newOrder)
	{
		// save order data into db
		$result = $this->db->insert('orders', $newOrder);
		// return the query status(id)
		return $result ? $this->db->insert_id() : false;
	}

	public function saveOrderItemsBatch($newOrderItems = array())
	{

		// Insert new order items
		$insert = $this->db->insert_batch('order_details', $newOrderItems);
		// return the query status(id)
		return $insert ? true : false;
	}
}
