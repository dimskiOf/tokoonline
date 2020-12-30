<?php 

class Detail_produk extends CI_Controller{
	public function index($id_barang){
		$data['barang'] = $this->model_barang->detail_barang($id_barang);
		$this->load->view('templates_user/header_top');
		$this->load->view('user/detail_produk',$data);
		$this->load->view('templates_user/footer');
	}
}

 ?>