<?php 

class Contact_us extends CI_Controller{
	public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$authtype = $this->session->userdata('authtype');
			if($authtype != 'user'){
				redirect('auth/login');
			}
		}
	public function index(){
		$this->load->view('templates_user/header_top');
		$this->load->view('user/contact_us');
		$this->load->view('templates_user/footer');
	}
 }
 ?>
