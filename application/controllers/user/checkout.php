<?php 

class Checkout extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('model_invoice');
		$authtype = $this->session->userdata('authtype');
		if($authtype != 'user'){
			redirect('auth/login');
		}
	}
	public function index(){
		$data = $this->model_invoice->nomoracakinvoice();
		if (!empty($data)){
		 foreach ($data as $row) {
		 	$tampung['noin'] = $row['nomor'];
		 }
		}else{
			$tampung['noin'] = 763;
		}
		$this->load->view('templates_user/header_top');
		$this->load->view('user/checkout',$tampung);
		$this->load->view('templates_user/footer');
	}

	public function invoicepesan(){
		$this->model_invoice->index();
		$this->cart->destroy();
		$sukses = array('datasuk' => true);
		echo json_encode($sukses);
	}

	public function hapus(){
		$this->destroy();
		redirect('user/dashboard');
	}
}

 ?>