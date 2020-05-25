<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Flight_details extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->fileContents = file_get_contents(base_url().'uploads/final.json');
        $this->json = json_decode($this->fileContents, true);
        $this->flight_details = $this->json['data']['data']['travel']['data']['result']['flight_data']['flights']['fullDay']['from'];

    }

	public function index()
	{
		$data['flights'] = $this->flight_details;
		$this->load->view('main_page', $data);
		
	}

	public function durationSliderChange()
	{return "123";
		$min = $this->input->post('min');
		print_r($min);die;
	}
}
