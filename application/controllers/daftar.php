<?php 

class Daftar extends CI_Controller{
public function index(){
	$this->form_validation->set_rules('username','username','required' ,['required'=> 'Username wajib diisi']);
	$this->form_validation->set_rules('nama_user','nama_user','required' ,['required'=> 'Nama wajib diisi']);
	$this->form_validation->set_rules('email','email','required',['required'=> 'Email wajib diisi']);
	$this->form_validation->set_rules('no_hp','no_hp','required',['required'=> 'Nomor Hanphone wajib diisi']);
	$this->form_validation->set_rules('alamat_user','alamat_user','required' ,['required'=> 'Alamat wajib diisi']);	
	$this->form_validation->set_rules('password1','password','required',['required'=> 'Password wajib diisi']);
	$this->form_validation->set_rules('password2','password','required|matches[password1]',['required'=> 'Password wajib diisi']);

	if($this->form_validation->run()== FALSE){
		$this->load->view('templates_admin/header');
		$this->load->view('daftar');
 		}else{
 			$data = array(
 				'username' 	=> $this->input->post('username'),
 				'nama_user' => $this->input->post('nama_user'),
 				'password' 	=> $this->input->post('password'),
 				'email' => $this->input->post('email'),
 				'no_hp' 	=> $this->input->post('no_hp'),
 				'alamat_user'=>$this->input->post('alamat_user'),
 				'password' => $this->input->post('password1'),
 			);
 			$this->db->insert('user',$data);
 			redirect('auth/login');

 		}	
	}
	
}
