<?php 

class Model_kategori_user extends CI_Model{
	public function data_medical_safety()
	{
		return $this->db->get_where('barang',array('kategori' =>'Medical Safety'));
	}
	public function data_electrical()
	{
		return $this->db->get_where('barang',array('kategori' =>'Electrical'));
	}
	public function data_cleaning_tools()
	{
		return $this->db->get_where('barang',array('kategori' =>'Cleaning Tools'));
	}
	public function data_industrial_safety()
	{
		return $this->db->get_where('barang',array('kategori' =>'Industrial Safety'));
	}
	public function data_equipment_horeca()
	{
		return $this->db->get_where('barang',array('kategori' =>'Equipment HORECA'));
	}
	public function data_equipment_cleaning()
	{
		return $this->db->get_where('barang',array('kategori' =>'Equipment Cleaning'));
	}
	public function data_equipment_tools()
	{
		return $this->db->get_where('barang',array('kategori' =>'Equipment Tools'));
	}
	public function data_equipment_electrical_cleaning()
	{
		return $this->db->get_where('barang',array('kategori' =>'Equipment Electrical Cleaning'));
	}
}

 ?>