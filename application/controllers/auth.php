<?php 

class Auth extends CI_Controller{
	public function login()
	{
		$this->form_validation->set_rules('username','username','required',['required' =>'Username wajib diisi']);
		$this->form_validation->set_rules('password','password','required',['required' =>'Password wajib diisi']);
		if($this->form_validation->run() == FALSE)
		{
			$this->load->view('templates_admin/header');
			$this->load->view('form_login');
		}else{
			$auth = $this->model_auth->cek_login();
			// echo json_encode($auth);
			if($auth == FALSE)
			{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">Username dan Password Salah !
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
				</div>');
			redirect('auth/login');
			}else{
				$authtype = $this->input->post('authtype');
				$username = $this->input->post('username');

				if($authtype == 'admin'){
					$name = $auth->nama_admin;
				}else{
					$name = $auth->nama_user;
					$alamat_user = $auth->alamat_user;
					$email = $auth->email;
				}
				$this->session->set_userdata('nama',$name);
				$this->session->set_userdata('iduser',$email);
				$this->session->set_userdata('username',$username);
				$this->session->set_userdata('alamat_user',$alamat_user);
				$this->session->set_userdata('authtype',$authtype);

				switch ($authtype) {
					case 'admin' : redirect('admin/dashboard'); break;
					case 'user' : redirect('user/dashboard'); break;
					default; break;
				}
			}
		}
	}

	public function logout(){
		$this->load->library('session');
		$this->session->sess_destroy();
		redirect('auth/login');
	}
 }
