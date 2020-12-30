<?php 

class produk extends CI_Controller{
public function index()
	{
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/produk',$data);
		$this->load->view('templates_admin/footer');
	 }
	public function tambah_aksi()
	{
		$nama_barang  = $this->input->post('nama_barang');
		$keterangan	  = $this->input->post('keterangan');
		$kategori	  = $this->input->post('kategori');
		$harga 	 	  = $this->input->post('harga');
		$stok 		  = $this->input->post('stok');
		$foto_barang = $_FILES['foto_barang']['name'];
		if($foto_barang=''){}else{
			$config['upload_path'] ='./uploads';
			$config['allowed_types'] ='jpg|jpeg|png';

			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('foto_barang')){
				echo "Gambar gagal diupload!";
			}else{
				$foto_barang = $this->upload->data('file_name');
			}
		}
		$data = array(
			'nama_barang' => $nama_barang,
			'keterangan'  => $keterangan,
			'kategori'	  => $kategori,
			'harga' 	  => $harga,
			'stok' 		  => $stok,
			'foto_barang' => $foto_barang
		);
	$this->model_barang->tambah_barang($data,'barang');
	redirect('admin/produk/index');
	}

	public function edit($id)
	{
		$where = array('id_barang' =>$id);
		$data['barang'] = $this->model_barang->edit_barang($where,'barang')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_barang',$data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id 		= $this->input->post('id_barang');
		$nama_barang= $this->input->post('nama_barang');
		$keterangan = $this->input->post('keterangan');
		$kategori 	= $this->input->post('kategori');
		$harga 		= $this->input->post('harga');
		$stok 		= $this->input->post('stok');
		$foto_barang= $_FILES['foto_barang']['name'];
		if($foto_barang){
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] ='jpg|jpeg|png|tiff';

			$this->load->library('upload',$config);

			if($this->upload->do_upload('foto_barang')){
				$foto_barang = $this->upload->data('file_name');
				$this->db->set('foto_barang', $foto_barang);
			}else{
				echo $this->upload->display_errors();
			}
		}

		$data = array(
			'nama_barang' => $nama_barang,
			'keterangan'  => $keterangan,
			'kategori'    => $kategori,
			'harga'       => $harga,
			'stok'        => $stok,
			'foto_barang' => $foto_barang,
		);
		$where = array('id_barang' => $id);
		$this->model_barang->update_data($where,$data,'barang');
		redirect('admin/produk/index');
	}

	public function hapus($id)
	{
		$where = array('id_barang' => $id);
		$this->model_barang->hapus_data($where,'barang');
		redirect('admin/produk/index');
	}
}
