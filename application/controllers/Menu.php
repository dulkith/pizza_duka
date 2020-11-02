<?php

class Menu extends CI_Controller
{
	public function index()
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
		$headerData['pizzaPageTitle'] = 'Menu';

		// get pizza sizes
		$data['sizes'] = $this->SizeModel->getSizes();
		// load items data fro database
		$data['items'] = $this->ItemModel->getItems();

		// process views
		$this->load->view('templates/header', $headerData);
		$this->load->view('pages/menu', $data);
		$this->load->view('templates/shopInformation');
		$this->load->view('templates/footer');
	}
}
