<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
    public function tampilUser()
    {
        return $this->db->get('user')->result();
    }

    public function tambahDataUser(){
		$data=[
			'id_user'=>$this->input->post('id_user', true),
            'nama'=>$this->input->post('nama', true),
            'alamat'=>$this->input->post('alamat', true),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin', true),
            'no_hp'=>$this->input->post('no_hp', true),
            'username'=>$this->input->post('username', true),
            'password'=>$this->input->post('password', true),
            'level'=>$this->input->post('level', true),
            'status'=>$this->input->post('status', true),
		];
	$this->db->insert('user', $data);
    }

   
    public function hapusDataUser($id_user)
	{
        $this->db->where('id_user', $id_user);
        if(
            $this->db->delete('user')
            
        ){
            return true;
        }else{
            return false;
        }
	
    }

    public function getUser($id_user){
		return $this->db->get_where('user',['id_user'=>$id_user])->result();
	}

    public function ubahDataUser(){
		$data=[
			'id_user'=>$this->input->post('id_user', true),
            'nama'=>$this->input->post('nama', true),
            'alamat'=>$this->input->post('alamat', true),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin', true),
            'no_hp'=>$this->input->post('no_hp', true),
            'username'=>$this->input->post('username', true),
            'password'=>$this->input->post('password', true),
            'level'=>$this->input->post('level', true),
            'status'=>$this->input->post('status', true),
		];
	$this->db->where('id_user', $this->input->post('id_user'));	
	$this->db->update('user', $data);
    }

    
}    