<?php


class CustomerModel extends CI_Model
{
	public function __construct()
	{
	}

	public function saveCustomer($newCustomer)
	{
		// save customer data into db
		$result = $this->db->insert('customers', $newCustomer);
		return $result?$this->db->insert_id():false;
	}
}
