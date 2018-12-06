<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CoursesController extends CI_Controller {

	public function index()
	{
		$data = [
			'idh' => 'courses',
			'hlm' => 'courses/index',
		];

		$this->load->view('front/index', $data);
	}

	public function detail()
	{
		$data = [
			'idh' => 'courses-detail',
			'hlm' => 'courses/detail',
		];

		$this->load->view('front/index', $data);
	}
}
