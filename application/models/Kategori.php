<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Model {

    protected $table = "tbl_kategori";
    public $primary = "id_kategori";

	public function __construct(){
        $this->load->database();
		parent::__construct();
	}

	public function get(){
		$query = $this->db->get($this->table);
		return $query->result();
	}

	public function get_where($key, $val){
		$this->db->where($key, $val);
		$query = $this->db->get($this->table);
		return $query->row();
	}

	public function insert($obj)
	{
		$this->db->insert($this->table, $obj);
	}

	public function update($where, $obj)
	{
		$this->db->where($this->primary, $where);
		$this->db->update($this->table, $obj);
	}

	public function delete($id)
	{
		$this->db->where($this->primary, $id);
		$this->db->delete($this->table);
	}
}
