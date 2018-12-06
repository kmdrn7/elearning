<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminController extends CI_Controller {

	public function index()
	{
		$data = [
			'jdl' => 'Dashboard',
			'idh' => 'dashboard',
			'hlm' => 'dashboard/index',
			'ktg' => 'admin',
		];

		$this->load->view('admin/index', $data);
	}

	public function admin()
	{
		return redirect('/admin/dashboard');
	}
}
