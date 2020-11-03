<?php

/**
 * Class Pages
 * Pizza NoW! online order system pages controller class by file name
 */
class Pages extends CI_Controller
{
	public function view($page = 'home')
	{
		if (!file_exists(APPPATH . 'views/pages/' . $page . '.php')) {
			show_404();
		}
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

		// load pages
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header', $headerData);
		$this->load->view('pages/' . $page, $data);
		$this->load->view('templates/shopInformation');
		$this->load->view('templates/footer');
	}
}
