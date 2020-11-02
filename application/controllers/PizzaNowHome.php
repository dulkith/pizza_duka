<?php

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
		echo "<script>console.log(JSON.parse('" . json_encode($data['items']) . "'));</script>";
		echo "<script>console.log(JSON.parse('" . json_encode($data['sizes']) . "'));</script>";

		/**** SET SESSION DATA ****/
		// set single item in session
		//$this->session->set_userdata('favourite_website', 'https://tutsplus.com');

		// set array of items in session
//		$arraydata = array(
//			'author_name'  => 'Sajal Soniiiiii',
//			'website'     => 'http://code.tutsplus.com',
//			'twitter_id' => '@sajalsoni',
//			'interests' => array('tennis', 'travelling')
//		);
//		$this->session->set_userdata($arraydata);

		/**** GET SESSION DATA ****/
		// get data from session
//		echo "<br>";
//		echo "Favourite Website: ". $this->session->userdata('favourite_website');
//		echo "<br>";
//		echo "Author Name: ". $this->session->userdata('author_name');
//		echo "<br>";
//		echo "Interest (Array Example): " . $this->session->userdata('interests')[0];
//		echo "<br>";

		// get e'thing stored in session at once
//		echo '<pre>';
//		print_r($this->session->userdata());

		// process views
		$this->load->view('templates/header',$headerData);
		$this->load->view('templates/pizzaNowBanner');
		$this->load->view('templates/shopInformation');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}
}
