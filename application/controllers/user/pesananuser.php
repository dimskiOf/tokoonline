<?php 

class Pesananuser extends CI_Controller{
	public function index(){
		$this->load->view('templates_user/header_top');
		$this->load->view('user/pesananuser');
		$this->load->view('templates_user/footer');
	}
	public function getinvoice(){
		$data = $this->model_invoice->totalperinvoice();
		echo json_encode($data);	
	}
 }
