<?php 

class Model_auth extends CI_Model{
	public function cek_login()
	{
		$username = set_value('username');
		$password = set_value('password');
		$authtype = set_value('authtype');
		$alamat_user= set_value('alamat_user');
		// query
		if($authtype=='admin'){
			$result = $this->db->where('username_admin',$username)
							->where('password', $password)
							->limit(1)
							->get('admin');
		} else {
			$result = $this->db->where('email',$username)
								->where('password', $password)
								->limit(1)
								->get('user');
		}

		if($result->num_rows()>0){
			return $result->row();
		}else{
			return array();
		}
	}
	public function session_user(){
		$username = set_value('username');
		$nama_user = set_value('nama_user');
		$alamat = set_value('alamat_user');	
		}
}