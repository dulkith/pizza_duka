<?php


class SizeModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getSizes()
	{
		$query = $this->db->get('sizes');
		return $query->result_array();
	}
}
