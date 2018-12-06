<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MainController extends CI_Controller {

	public function index()
	{
		$data = [
			'idh' => 'landing',
			'hlm' => 'landing/index',
		];

		$this->load->view('front/index');
	}
}
