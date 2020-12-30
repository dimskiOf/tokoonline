<?php 

class Admin extends CI_Controller{
	public function index(){
		$data['admin'] = $this->model_admin->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/admin',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_admin  = $this->input->post('nama_admin');
		$username_admin = $this->input->post('username_admin');
		$password	= $this->input->post('password');
		$no_hp = $this->input->post('no_hp');
		$alamat = $this->input->post('alamat');
 		$foto_admin = $_FILES['foto_admin']['name'];
		if($foto_admin=''){}else{
			$config['upload_path'] ='./uploads';
			$config['allowed_types'] ='jpg|jpeg|png';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto_admin')){
				echo "Gambar gagal diupload!";
			}else{
				$foto_admin = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nama_admin' => $nama_admin,
			'username_admin' => $username_admin,
			'password' => $password,
			'no_hp' => $no_hp,
			'alamat' => $alamat,
			'foto_admin' => $foto_admin
		);
	$this->model_admin->tambah_admin($data,'admin');
	redirect('admin/admin/index');
	}


	public function hapus($id){
		$where=array('id_admin' => $id,);
		$this->model_admin->hapus_data($where,'admin');
		redirect('admin/admin/index');
	}
}

 ?>