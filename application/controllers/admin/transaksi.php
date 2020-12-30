<?php 
class Transaksi extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$authtype = $this->session->userdata('authtype');
		if($authtype != 'admin'){
			redirect('auth/login');
		}
	}
	public function index(){
		$data['invoice'] = $this->model_invoice->tampil_data();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/transaksi',$data);
		$this->load->view('templates_admin/footer');
	}
	
	public function updatestatus(){
	$this->model_invoice->updatestatus();

	$data = true;
	echo json_encode($data);
	}

	public function getinvoice(){
		$data = $this->model_invoice->totalinvoice();
		echo json_encode($data);	
	}
 }
