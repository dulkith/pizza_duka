<?php


class SizeModel extends CI_Model
{
	public function __construct()
	{
	}

	public function getSizes()
	{
		$query = $this->db->get('sizes');
		return $query->result_array();
	}
}
