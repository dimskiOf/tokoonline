<?php 

class Model_patner extends CI_Model{
	public function tampil_data(){
		return $this->db->get('patner');
	}
	public function tambah_patner($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_patner($where,$table){
		return $this->db->get_where($table,$where);
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

	public function find($id)
	{
		$result = $this->db->where('id_patner', $id)
					   ->limit(1)
					   ->get('patner');
		if($result->num_rows()>0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail_patner($id_patner){
		$result = $this->db->where('id_patner',$id_patner)->get('patner');
		if($result->num_rows()>0){
			return $result->result();
		}else{
			return false;
		}
	}
}