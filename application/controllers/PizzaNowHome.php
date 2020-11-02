<?php

class PizzaNowHome extends CI_Controller
{
	public function index()
	{
		$headerData['pizzaPageTitle'] = 'Home';

		// get pizza sizes
		$data['sizes'] = $this->SizeModel->getSizes();

		// load items data fro database
		$data['items'] = $this->ItemModel->getItems();
		echo "<script>console.log(JSON.parse('" . json_encode($data['items']) . "'));</script>";
		echo "<script>console.log(JSON.parse('" . json_encode($data['sizes']) . "'));</script>";

		// process views
		$this->load->view('templates/header',$headerData);
		$this->load->view('templates/pizzaNowBanner');
		$this->load->view('templates/shopInformation');
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}
}
