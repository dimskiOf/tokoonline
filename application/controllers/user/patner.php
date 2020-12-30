<?php 

class Patner extends CI_Controller{
	public function index(){
		$data['patner'] = $this->model_patner->tampil_data()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/patner',$data);
		$this->load->view('templates_user/footer');
	}
}