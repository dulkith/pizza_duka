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

	public function checkout()
	{
		$customerData = $data = array();
		// Form field validation rules
		$this->form_validation->set_rules('first-name', 'First Name', 'required');
		$this->form_validation->set_rules('last-name', 'Last Name', 'required');
		$this->form_validation->set_rules('mobile', 'Phone', 'required');
		$this->form_validation->set_rules('address-line-one', 'Address Line One', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('region', 'Region', 'required');

		// create customer data object with form data
		$customerData = array(
			'first_name' => strip_tags($this->input->post('first-name')),
			'last_name' => strip_tags($this->input->post('last-name')),
			'mobile' => strip_tags($this->input->post('mobile')),
			'address' => strip_tags($this->input->post('address-line-one'))
				. ' ' . strip_tags($this->input->post('address-line-two'))
				. ' ' . strip_tags($this->input->post('city'))
				. ' ' . strip_tags($this->input->post('region')),
		);
		// order detail form validation process
		if ($this->form_validation->run() == FALSE) {
			$this->index();
		} else {
			// save customer data
			$customerSaveResponse = $this->CustomerModel->saveCustomer($customerData);
			// save response validate and save order data
			if ($customerSaveResponse) {
				// get cart data
				$cartDataArray = $this->session->userdata('cartData');
				// get cart item count
				$itemCount = count($cartDataArray);
				// check cart item data
				// calculate subtotal and total
				$subTotal = 0;
				foreach ($cartDataArray as $cartItem){
					$subTotal += $cartItem->total;
				}
				$deliverCharge = 200;
				$total = $subTotal + $deliverCharge;
				// generate order id
				$orderId = strtoupper(random_string('alnum',20));

				// create order data object
				$newOrdData = array(
					'order_id' => $orderId,
					'customer_id' => $customerSaveResponse,
					'item_count' => $itemCount,
					'sub_total' => $subTotal,
					'deliver_charge' => $deliverCharge,
					'total' => $total
				);
				$orderSaveResponse = $this->OrderModel->saveOrder($newOrdData);
				// save response validate and save order item data
				if($orderSaveResponse){

					echo "<script>console.log(JSON.parse('" . json_encode($cartDataArray) . "'));</script>";
				}

			}
		}

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
