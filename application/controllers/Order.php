<?php

class Order extends CI_Controller
{
	public function index()
	{
		// get cart data
		$cartDataArray = $this->session->userdata('cartData');
		// get cart item count
		$itemCount = count($cartDataArray);
		// check cart item data
		if ($itemCount !== 0) {
			$headerData['pizzaPageTitle'] = 'Cart[' . $itemCount . ']';
			$headerData['cartCount'] = $itemCount;
			// calculate subtotal
			$subTotal = 0;
			foreach ($cartDataArray as $cartItem)
				$subTotal += $cartItem->total;
			$data['cartDataArray'] = $cartDataArray;
			$data['cartCount'] = $itemCount;
			$data['subTotal'] = $subTotal;
			$data['deliverCharge'] = 200;
			$data['total'] = $subTotal + $data['deliverCharge'];
			// process views
			$this->load->view('templates/header', $headerData);
			$this->load->view('pages/order', $data);
			$this->load->view('templates/shopInformation');
			$this->load->view('templates/footer');
			return;
		}
		$headerData['pizzaPageTitle'] = 'Cart-[' . $itemCount . ']';
		$headerData['cartCount'] = $itemCount;
		// process views
		$this->load->view('templates/header', $headerData);
		$this->load->view('pages/cart-empty');
		$this->load->view('templates/shopInformation');
		$this->load->view('templates/footer');
	}

}

class CartItem
{
	public $id;
	public $image;
	public $title;
	public $cartDescription;
	public $qty;
	public $price;
	public $total;

	public function __construct($id, $image, $title, $cartDescription, $qty, $price, $total)
	{
		$this->id = $id;
		$this->image = $image;
		$this->title = $title;
		$this->cartDescription = $cartDescription;
		$this->qty = $qty;
		$this->price = $price;
		$this->total = $total;
	}
}
