<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class KategoriController extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Kategori');
		$this->form_validation->set_error_delimiters('<span class="label label-danger">', '</span>');
	}

	public function index()
	{
		$data = [
			'jdl' => 'Kategori',
			'idh' => 'kategori',
			'hlm' => 'kategori/index',
			'ktg' => 'admin',
			'kategori' => $this->Kategori->get()
		];

		$this->load->view('admin/index', $data);
	}

	public function add(){
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('kategori', 'Kategori', 'required|min_length[4]|is_unique[tbl_kategori.kategori]', [
				'required' 		=> 'Harus diisi, tidak boleh kosong',
				'min_length' 	=> 'Minimal berisi 4 karakter',
				'is_unique'		=> 'Kategori ini sudah ada',
			]);
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'min_length[5]', [
				'required'		=> 'Harus diisi, tidak boleh kosong',
				'min_length'	=> 'Minimal berisi 5 karakter',
			]);
			
			if ($this->form_validation->run() == TRUE) {
				$obj = [
					'kategori' => $this->input->post('kategori'),
					'deskripsi' => $this->input->post('deskripsi')
				];

				$this->Kategori->insert($obj);
				$this->session->set_flashdata('sukses-in', 'Data sudah ditambahkan');
				redirect(base_url('admin/kategori'),'refresh');
			} else {
				$data = [
					'idh' => 'kategori',
					'hlm' => 'kategori/insert',
					'ktg' => 'master'
				];

				$this->load->view('admin/index', $data);
			}
		}else{
			$data = [
				'idh' => 'kategori',
				'hlm' => 'kategori/insert',
				'ktg' => 'master'
			];

			$this->load->view('admin/index', $data);
		}
	}

	public function update(){
		$id = $this->uri->segment(4);
		if ($this->input->server('REQUEST_METHOD') == 'POST') {
			$this->form_validation->set_rules('kategori', 'Kategori', 'required|min_length[4]', [
				'required' 		=> 'Harus diisi, tidak boleh kosong',
				'min_length' 	=> 'Minimal berisi 4 karakter',
			]);
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'min_length[5]', [
				'required'		=> 'Harus diisi, tidak boleh kosong',
				'min_length'	=> 'Minimal berisi 5 karakter',
			]);

			if ($this->form_validation->run() == TRUE) {
				$obj = [
					'kategori' => $this->input->post('kategori'),
					'deskripsi' => $this->input->post('deskripsi')
				];

				$this->Kategori->update($id, $obj);
				$this->session->set_flashdata('sukses', 'Data berhasil diubah');
				redirect(base_url('admin/kategori'),'refresh');
			} else {
				$kategori = $this->Kategori->get_where($this->Kategori->primary, $id);

				$data = [
					'idh' => 'kategori',
					'hlm' => 'kategori/update',
					'ktg' => 'master',
					'kategori' => $kategori,
					'primary' => $id,
				];

				$this->load->view('admin/index', $data);
			}
		}else{
			$kategori = $this->Kategori->get_where($this->Kategori->primary, $id);

			$data = [
				'idh' => 'kategori',
				'hlm' => 'kategori/update',
				'ktg' => 'master',
				'kategori' => $kategori,
				'primary' => $id,
			];

			$this->load->view('admin/index', $data);
		}
	}

	public function delete(){
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post('id');
			$this->Kategori->delete($id);
			echo 'sukses';
		}else{
			$data = [
				'heading' => 'Woops, Halaman tidak ada',
				'message' => ' Anda mengakses halaman terlarang'
			];

			echo json_encode($data);
		}
	}

	public function view()
	{
		if ($this->input->is_ajax_request()) {
			$id = $this->input->post('id');
			$data = $this->Kategori->get_where($this->Kategori->primary, $id);

			print json_encode($data);
		}else{
			$data = [
				'heading' => 'Woops, Halaman tidak ada',
				'message' => ' Anda mengakses halaman terlarang'
			];
			return $this->load->view('errors/html/error_404', $data);
		}
	}
}
