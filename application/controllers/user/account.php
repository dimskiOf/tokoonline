<?php 
class Account extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$authtype = $this->session->userdata('authtype');
		if($authtype != 'user'){
			redirect('auth/login');
		}
	}
	public function index(){
		$data['user'] = $this->db->get_where('user',['email' => $this->session->userdata('email')])->row_array();
		$data['alamat_user'] = $this->db->get_where('user',['alamat_user' => $this->session->userdata('alamat_user')])->row_array();

		$this->load->view('templates_user/header_top');
		$this->load->view('user/account',$data);
		$this->load->view('templates_user/footer');
	}

}