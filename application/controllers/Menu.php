<?php

class Menu extends CI_Controller
{
	public function index()
	{
		$headerData['pizzaPageTitle'] = 'Menu';

		// get pizza sizes
		$data['sizes'] = $this->SizeModel->getSizes();

		// load items data fro database
		$data['items'] = $this->ItemModel->getItems();
		echo "<script>console.log(JSON.parse('" . json_encode($data['items']) . "'));</script>";
		echo "<script>console.log(JSON.parse('" . json_encode($data['sizes']) . "'));</script>";

		// process views
		$this->load->view('templates/header',$headerData);
		$this->load->view('pages/menu', $data);
		$this->load->view('templates/shopInformation');
		$this->load->view('templates/footer');
	}
}
