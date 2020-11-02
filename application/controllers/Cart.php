<?php

class Cart extends CI_Controller
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
			$data['subTotal'] = $subTotal;
			$data['deliverCharge'] = 200;
			$data['total'] = $subTotal + $data['deliverCharge'];
			// process views
			$this->load->view('templates/header', $headerData);
			$this->load->view('pages/cart', $data);
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

	public function addItemToCart($id, $description = FALSE)
	{
		// find item by id
		$itemData = $this->ItemModel->getItems($id);
		// validate item
		if (!$itemData) {
			redirect('cart');
		}
		// initialize cart data session array
		$cartDataArray = array();
		// check exiting cart items
		if ($this->session->has_userdata('cartData')) {
			$cartDataArray = $this->session->userdata('cartData');
		}
		// check array for item already exist
		$product_exists = FALSE;
		foreach ($cartDataArray as $cartItem) {
			if ($cartItem->id == $itemData['id']) {
				// increment item quantity
				$cartItem->qty++;
				// calculate new total
				$cartItem->total = $itemData['price'] * $cartItem->qty;
				$product_exists = TRUE;
				break;
			}
		}
		// create new item cart object
		if (!$product_exists) {
			// set default item description
			if ($description === FALSE) {
				$description = $itemData['description'];
			}
			$newCartItem = new CartItem($itemData['id'], $itemData['image'], $itemData['title'], $description, 1, $itemData['price'], $itemData['price']);
			// add new item to cart array
			array_push($cartDataArray, $newCartItem);
		}
		// set cart data array to session
		$this->session->set_userdata('cartData', $cartDataArray);

		// Redirect to the cart page
		redirect('cart');
	}

	public function addPizzaToCart()
	{
		// get customize pizza form data
		$id = $this->input->post('form-id');
		$image =  $this->input->post('form-image');
		$title = $this->input->post('form-title');
		$size =  $this->input->post('form-size');
		$toppings =  $this->input->post('form-toppings');
		$description = $size . ' - ' . $toppings;
		$qty = $this->input->post('form-qty');
		$price =  $this->input->post('form-price');
		$total = $this->input->post('form-total');

		// initialize cart data session array
		$cartDataArray = array();
		// check exiting cart items
		if ($this->session->has_userdata('cartData')) {
			$cartDataArray = $this->session->userdata('cartData');
		}
		// create new customize pizza object
		$newCartItem = new CartItem($id, $image, $title, $description, $qty, $price, $total);
		// add new item to cart array
		array_push($cartDataArray, $newCartItem);

		// set cart data array to session
		$this->session->set_userdata('cartData', $cartDataArray);

		// Redirect to the cart page
		redirect('cart');
	}

	public function removeItemFromCart($id)
	{
		$cartDataArray = $this->session->userdata('cartData');
		$isRemove = FALSE;
		foreach ($cartDataArray as $key => $cartItem) {
			if ($cartItem->id == $id) {
				unset($cartDataArray[$key]);
				$isRemove = TRUE;
				break;
			}
		}
		// set updated cart data array to session
		$this->session->set_userdata('cartData', $cartDataArray);

		// Redirect to the cart page
		redirect('cart');
	}

	public function updateItemQty($id, $qty)
	{
		$cartDataArray = $this->session->userdata('cartData');
		$isUpdateQty = FALSE;
		foreach ($cartDataArray as $key => $cartItem) {
			if ($cartItem->id == $id) {
				// validate new qty is valid
				if ($cartItem->qty === 1 && $qty === '-1') {
					// Redirect to the cart page
					redirect('cart');
				}
				// increment item quantity
				$cartItem->qty = $cartItem->qty + $qty;
				// calculate new total
				$cartItem->total = $cartItem->price * $cartItem->qty;
				$isUpdateQty = TRUE;
				break;
			}
		}
		// set updated cart data array to session
		$this->session->set_userdata('cartData', $cartDataArray);

		// Redirect to the cart page
		redirect('cart');
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
