<?php
defined('BASEPATH') OR exit('No direct scipt access allowes');
/**
 * 
 */
class login_model extends CI_Model
{
	public function login($username, $password){
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('status','aktif');
		$this->db->limit(1);

		$query=$this->db->get();
		if ($query->num_rows()==1) {
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function registerMember(){
		$data=[
            'nama'=>$this->input->post('nama', true),
            'alamat'=>$this->input->post('alamat', true),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin', true),
			'no_hp'=>$this->input->post('no_hp', true),
			'username'=>$this->input->post('username', true),
			'password'=>$this->input->post('password', true),
            'level'=>'member',
            'status'=>'pasif',
		];
		$this->db->insert('user', $data);
	}
}
?>
