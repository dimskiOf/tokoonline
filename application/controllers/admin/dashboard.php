<?php 

class Dashboard extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$authtype = $this->session->userdata('authtype');
		if($authtype == 'user'){
			redirect('user/dashboard');
		}elseif($authtype == 'admin'){
		}else{
			redirect('auth/login');
		}
	}

	public function index(){ 
		$authtype = $this->session->userdata('authtype');
			$admin = $this->db->query("SELECT * FROM admin");
			$data['admin'] =  $admin->num_rows();
			$user = $this->db->query("SELECT * FROM user");
			$data['user'] = $user->num_rows();
			$barang = $this->db->query("SELECT * FROM barang");
			$data['barang'] = $barang->num_rows();
			$kategori = $this->db->query("SELECT * FROM kategori");
			$data['kategori']=$kategori->num_rows();
			$patner = $this->db->query("SELECT * FROM patner");
			$data['patner']=$patner->num_rows();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/dashboard',$data);
			$this->load->view('templates_admin/footer');
		 	}

}
