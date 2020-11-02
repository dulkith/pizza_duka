<?php 
    class Customize extends CI_Controller {

		public function index($id = NULL)
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

			// get pizza sizes
			$data['sizes'] = $this->SizeModel->getSizes();
			// get pizza toppings
			$data['toppings'] = $this->ToppingModel->getToppings();

			// find item by id
			$data['item'] = $this->ItemModel->getItems($id);
			// validate item is empty or not
			if (empty($data['item'])) {
				show_404();
			}
			// process data
			$data['title'] = $data['item']['title'];

			//page title
			$headerData['pizzaPageTitle'] = $data['title'];

			// process views
			$this->load->view('templates/header',$headerData);
			$this->load->view('pages/customize', $data);
			$this->load->view('templates/footer');
		}
    }
