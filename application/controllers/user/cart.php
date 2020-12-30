<?php 

class Cart extends CI_Controller{
	public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$authtype = $this->session->userdata('authtype');
			if($authtype != 'user'){
				redirect('auth/login');
			}
		}
	public function index(){
		$this->load->view('templates_user/header_top');
		$this->load->view('user/cart');
		$this->load->view('templates_user/footer');
	}
	public function hapus()
	{
		$this->cart->destroy();
		redirect('user/dashboard');
	}

	public function updateqty($id, $qty)
	{
		$data = array(
			array(
	        'rowid' => $id,
	        'qty'   => $qty
			)
		);


	$this->cart->update($data);

	$view = array(
			
	        'total' => number_format($this->cart->total(),0,',','.')
			
		);

		echo json_encode($view);

	}

	public function updateqtydown($id, $qty)
	{
		$data = array(
			array(
	        'rowid' => $id,
	        'qty'   => $qty
			)
		);

		$this->cart->update($data);

		$view = array(
			
	        'total'   => number_format($this->cart->total(),0,',','.')
			
		);

		echo json_encode($view);
	}

	public function hapusqty($id)
	{
		$this->cart->remove($id);
		redirect('user/cart/index');
	}
	
 }
