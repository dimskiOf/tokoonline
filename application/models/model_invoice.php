<?php 

class Model_invoice extends CI_Model{
	public function index(){

		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$id_invoice = $this->input->post('idin');
		$nomorhp = $this->input->post('no_hp');

		$invoice = array(
			'id_invoice' => $this->input->post('idin'),
			'no_hp' => $nomorhp,
			'nama_penerima' => $nama,
			'alamat_penerima' => $alamat,
			'tgl' => date('Y-m-d H:i:s'),
			'userid' => $this->session->userdata('iduser')
		);
		$this->db->insert('invoice', $invoice);
		

		foreach ($this->cart->contents() as $items){
			$data = array(
				'id_invoice' => $id_invoice,
				'id_barang' => $items['id'],
				'nama_barang' => $items['name'],
				'jumlah' => $items['qty'],
				'harga' =>$items['price'],
			);
		$this->db->insert('pesanan',$data);
		}
	}
	
	public function updatestatus(){
		$data = $this->input->post('data');
		
	}

	public function totalperinvoice(){
		$id = $this->session->userdata('iduser');
		$query = "SELECT *,sum(pesanan.jumlah * pesanan.harga) AS subtot FROM  invoice INNER JOIN pesanan ON invoice.id_invoice = pesanan.id_invoice WHERE userid = '$id' GROUP BY pesanan.id_invoice";
		return  $this->db->query($query)->result_array();
	}

	public function totalinvoice(){
		$query = "SELECT *,sum(pesanan.jumlah * pesanan.harga) AS subtot FROM  invoice INNER JOIN pesanan ON invoice.id_invoice = pesanan.id_invoice GROUP BY pesanan.id_invoice";
		return  $this->db->query($query)->result_array();
	}

	public function nomoracakinvoice()
	{
		$query = 'SELECT FLOOR(RAND() * 99999) AS nomor FROM invoice WHERE "random_num" NOT IN (SELECT id_invoice FROM invoice) LIMIT 1';	
	return  $this->db->query($query)->result_array();
	}

	public function tampil_data()
	{
		$result = $this->db->get('invoice');
		if($result->num_rows()>0){
			return $result->result();
		}else{
			return false;
		}
	}
}