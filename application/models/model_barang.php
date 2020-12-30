<?php 

class Model_barang extends CI_Model
{
	public function tampil_data(){
		return $this->db->get('barang');
	}

	public function tambah_barang($data,$table){
		$this->db->insert($table,$data);
	}

	public function edit_barang($where,$table){
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
		$result = $this->db->where('id_barang', $id)
					   ->limit(1)
					   ->get('barang');
		if($result->num_rows()>0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function detail_barang($id_barang){
		$result = $this->db->where('id_barang',$id_barang)->get('barang');
		if($result->num_rows()>0){
			return $result->result();
		}else{
			return false;
		}
	}

	public function searchbar($data){
    $stat = 'Tersedia';
    $this->db->select('nama_barang,kategori');
    $this->db->from('barang');
    $this->db->where("stok",$stat);
    $this->db->like('nama_barang',$data);
    $this->db->or_like('kategori',$data);
    $this->db->limit(5);
    $this->db->order_by('id_barang', 'DESC');
    return $this->db->get()->result();

}
 }
