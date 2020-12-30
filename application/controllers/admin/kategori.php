<?php

class Kategori extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
		$authtype = $this->session->userdata('authtype');
		if($authtype != 'admin'){
			redirect('auth/login');
		}
	}
	public function index(){
		$data['kategori'] = $this->model_kategori->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/kategori',$data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi()
	{
		$nama_kategori  = $this->input->post('nama_kategori');
		$keterangan = $this->input->post('keterangan');
	

	$data=array(
		'nama_kategori' =>$nama_kategori,
		'keterangan'    =>$keterangan
	);

	$this->model_kategori->tambah_kategori($data,'kategori');
	redirect('admin/kategori/index');
	}

	public function edit($id)
	{ 
		$where = array('id_kategori' =>$id);
		$data['kategori'] = $this->model_kategori->edit_kategori($where,'kategori')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_kategori',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update()
	{
		$id = $this->input->post('id_kategori');
		$nama_kategori =$this->input->post('nama_kategori');
		$keterangan    =$this->input->post('keterangan');

		$data = array(
			'nama_kategori' =>$nama_kategori,
			'keterangan'    =>$keterangan,
		);

		$where = array('id_kategori' => $id, );
		$this->model_kategori->update_data($where,$data,'kategori');
		redirect('admin/kategori/index');
	}

	public function hapus($id)
	{
		$where = array('id_kategori' =>$id);
		$this->model_kategori->hapus_data($where,'kategori');
		redirect('admin/kategori/index');
	}
} 