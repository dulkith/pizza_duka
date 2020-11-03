<?php

/**
 * Class PizzaNowHome
 * Pizza NoW! online order system home page controller controller class
 */
class PizzaNowHome extends CI_Controller
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
		$headerData['pizzaPageTitle'] = 'Home';

		// get pizza sizes
		$data['sizes'] = $this->SizeModel->getSizes();

		// load items data fro database
		$data['items'] = $this->ItemModel->getItems();

		// process views
		$this->load->view('templates/header',$headerData);
		$this->load->view('templates/pizzaNowBanner');
		$this->load->view('templates/shopInformation');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}
}
