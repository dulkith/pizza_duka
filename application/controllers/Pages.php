<?php 
    class Pages extends CI_Controller {
        public function view($page = 'home'){
            if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
                show_404();
            }
            // load pages
            $data['title'] = ucfirst($page);
            $this->load->view('templates/header');
            $this->load->view('pages/'.$page, $data);
			$this->load->view('templates/shopInformation');
            $this->load->view('templates/footer');
        }

		public function customize($id = NULL)
		{
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

			echo "<script>console.log(JSON.parse('" . json_encode($data['item']) . "'));</script>";
			echo "<script>console.log(JSON.parse('" . json_encode($data['sizes']) . "'));</script>";
			echo "<script>console.log(JSON.parse('" . json_encode($data['toppings']) . "'));</script>";

			// process views
			$this->load->view('templates/header',$headerData);
			$this->load->view('pages/customize', $data);
			$this->load->view('templates/footer');
		}
    }
