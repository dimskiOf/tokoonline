<?php 

class Model_kategori extends CI_Model{
	public function tampil_data(){
		return $this->db->get('kategori');
	}
	public function tambah_kategori($data,$table){
		$this->db->insert($table,$data);
	}
	public function edit_kategori($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$data){
		$this->db->where($where);
		$this->db->delete($data);
	}
}