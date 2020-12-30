<?php 

class User extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$authtype = $this->session->userdata('authtype');
		if($authtype != 'admin'){
			redirect('auth/login');
		}
	}
	public function index()
	{
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/user',$data);
		$this->load->view('templates_admin/footer');
	}

	public function hapus($id){
		$where = array('user_id'=> $id,);
		$this->model_user->hapus_data($where,'user');
		redirect('admin/user/index');
	}
}

 ?>