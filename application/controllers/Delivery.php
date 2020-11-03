<?php

/**
 * Class Delivery
 * Pizza NoW! online order system item delivery controller class
 */
class Delivery extends CI_Controller
{
	public function __construct() {
		parent::__construct();
		// set local time zone
		date_default_timezone_set('Asia/Colombo');
	}

	public function index($orderId)
	{
		// get cart item count
		$itemCount = 0;
		// check caritem data
		if ($this->session->has_userdata('cartData')) {
			// get cart data
			$cartDataArray = $this->session->userdata('cartData');

			$itemCount = count($cartDataArray);
			$headerData['cartCount'] = $itemCount;
		}
		$headerData['cartCount'] = $itemCount;
		$headerData['pizzaPageTitle'] = 'Delivery';

		// find order by id
		$data['orderData'] = $this->OrderModel->getOrderById($orderId);

		// process views
		$this->load->view('templates/header', $headerData);
		$this->load->view('pages/delivery', $data);
		$this->load->view('templates/shopInformation');
		$this->load->view('templates/footer');
	}
}
