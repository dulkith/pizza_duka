<?php


class ItemModel extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	public function getItems($id = FALSE)
	{
		if ($id === FALSE) {
			$query = $this->db->get('items');
			return $query->result_array();
		}

		$query = $this->db->get_where('items', array('id' => $id));
		return $query->row_array();
	}
}
