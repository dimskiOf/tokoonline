<?php 
 
class Dashboard extends CI_Controller{
	public function index(){
		$data['barang'] = $this->model_barang->tampil_data()->result();
		$this->load->view('templates_user/header_top');
		$this->load->view('user/dashboard',$data);
		$this->load->view('templates_user/footer');
	}

	public function search(){
        $data = $this->input->post('query');
        $show =  $this->model_barang->searchbar($data);
        header("Content-Type: application/json");
        if (count($show) > 0) {
            foreach ($show as $row)
                $arr_result[] = $row->nama_barang;
                $data = [array($arr_result)];
                echo json_encode(array(
                "status"    => true,
                "error"     => false,
                "data"      => array(
                    "nama_barang"   => $arr_result)));
            }
    }
}

 ?>