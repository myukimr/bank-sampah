<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class komentar_model extends CI_Model {
    public function tampilKomentar()
    {
        $this->db->select('komentar.*, user.nama');
        $this->db->join('user', 'komentar.id_user = user.id_user');
        return $this->db->get('komentar')->result();
    }

    public function tambahDataKomentar(){
		$data=[
			'id_komentar'=>$this->input->post('id_komentar', true),
            'id_user'=> $this->session->userdata('id_user'),
            'komentar'=>$this->input->post('komentar', true),
		];
	$this->db->insert('komentar', $data);
    }

    
    public function hapusDataKomentar($id_komentar)
	{
		$this->db->where('id_komentar', $id_komentar);
		$this->db->delete('komentar');
    }
}

?>