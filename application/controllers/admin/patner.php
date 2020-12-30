<?php 

class Patner extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$authtype = $this->session->userdata('authtype');
		if($authtype != 'admin'){
			redirect('auth/login');
		}
	}
	public function index(){
		$data['patner'] = $this->model_patner->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/patner',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$logo = $_FILES['logo']['name'];
		if($logo=''){}else{
			$config['upload_path'] ='./uploads';
			$config['allowed_types'] ='jpg|jpeg|png';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('logo')){
				echo "logo gagal diupload!";
			}else{
				$logo = $this->upload->data('file_name');
			}
		$nama_perusahaan  = $this->input->post('nama_perusahaan');
		$keterangan	  = $this->input->post('keterangan');
		}
		$data = array(
			'logo' => $logo,
			'nama_perusahaan' => $nama_perusahaan,
			'keterangan'  => $keterangan
		);
	$this->model_patner->tambah_patner($data,'patner');
	redirect('admin/patner/index');
	}


	public function edit($id)
	{
		$where = array('id_patner' =>$id);
		$data['patner'] = $this->model_patner->edit_patner($where,'patner')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_patner',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id 		= $this->input->post('id_patner');
		$nama_patner= $this->input->post('nama_patner');
		$keterangan = $this->input->post('keterangan');
		$logo       = $_FILES['logo']['name'];
		if($logo){
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] ='jpg|jpeg|png|tiff';

			$this->load->library('upload',$config);

			if($this->upload->do_upload('logo')){
				$logo = $this->upload->data('file_name');
				$this->db->set('logo', $logo);
			}else{
				echo $this->upload->display_errors();
			}
		}
		$data = array(
			'nama_patner' => $nama_patner,
			'keterangan'  => $keterangan
		);
		$where = array('id_patner' => $id);
		$this->model_patner->update_data($where,$data,'patner');
		redirect('admin/patner/index');
	}

	public function hapus($id)
	{
		$where = array('id_patner' => $id);
		$this->model_barang->hapus_data($where,'patner');
		redirect('admin/patner/index');
	}

}