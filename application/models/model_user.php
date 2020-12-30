<?php 

class Model_user extends CI_Model{
	public function tampil_data(){
		return $this->db->get('user');
	}
	public function hapus_data($where,$data){
		$this->db->where($where);
		$this->db->delete($data);
	}
}

 ?>