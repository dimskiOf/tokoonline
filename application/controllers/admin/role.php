<?php 

class Role extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$authtype = $this->session->userdata('authtype');
		if($authtype != 'user'){
			redirect('auth/login');
		}
	}
	public function index(){
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/role');
		$this->load->view('templates_admin/footer');
	}
}

 ?>