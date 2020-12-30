<?php 

class Kategori extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$authtype = $this->session->userdata('authtype');
		if($authtype != 'user'){
			redirect('auth/login');
		}
	}
	public function medical_safety(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['medical_safety'] = $this->model_kategori_user->data_medical_safety()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/medical_safety',$data);
		$this->load->view('templates_user/footer');
	}

	public function cart($id)
	{
		$barang = $this->model_barang->find($id);
		$data = array(
			'id' => $barang->id_barang,
			'qty' => 1,
			'price' => $barang->harga,
			'name' => $barang->nama_barang,
			'image' => $barang->foto_barang,
		);
		$this->cart->insert($data);
		redirect('user/kategori/medical_safety');

	}
	public function detailcart(){
		$this->load->view('templates_user/header_top');
		$this->load->view('user/cart');
		$this->load->view('templates_user/footer');
	}
	public function electrical(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['electrical'] = $this->model_kategori_user->data_electrical()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/electrical',$data);
		$this->load->view('templates_user/footer');
	}
	public function cleaning_tools(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['cleaning_tools'] = $this->model_kategori_user->data_cleaning_tools()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/cleaning_tools',$data);
		$this->load->view('templates_user/footer');
	}
	public function industrial_safety(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['industrial_safety'] = $this->model_kategori_user->data_industrial_safety()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/industrial_safety',$data);
		$this->load->view('templates_user/footer');
	}
	public function equipment_horeca(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['equipment_horeca'] = $this->model_kategori_user->data_equipment_horeca()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/equipment_horeca',$data);
		$this->load->view('templates_user/footer');
	}
	public function equipment_cleaning(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['equipment_cleaning'] = $this->model_kategori_user->data_equipment_cleaning()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/equipment_cleaning',$data);
		$this->load->view('templates_user/footer');
	}
	public function equipment_tools(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['equipment_tools'] = $this->model_kategori_user->data_equipment_tools()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/equipment_tools',$data);
		$this->load->view('templates_user/footer');
	}
	public function equipment_electrical_cleaning(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$data['equipment_electrical_cleaning'] = $this->model_kategori_user->data_equipment_electrical_cleaning()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/equipment_electrical_cleaning',$data);
		$this->load->view('templates_user/footer');
	}
}

 ?>