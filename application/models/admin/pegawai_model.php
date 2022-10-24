<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class pegawai_model extends CI_Model {
    public function tampilPegawai()
    {
        
        return $this->db->get('pegawai')->result();
    }

    public function tambahDataPegawai(){
		$data=[
			'id_pegawai'=>$this->input->post('id_pegawai', true),
            'nama_pegawai'=>$this->input->post('nama_pegawai', true),
            'ttl'=>$this->input->post('ttl', true),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin', true),
            'alamat'=>$this->input->post('alamat', true),
            'no_hp'=>$this->input->post('no_hp', true),
		];
	$this->db->insert('pegawai', $data);
    }

    public function hapusDataPegawai($id_pegawai)
	{
        $this->db->where('id_pegawai', $id_pegawai);
        if(
            $this->db->delete('pegawai')
            
        ){
            return true;
        }else{
            return false;
        }
	
    }
    
    public function getPegawai($id_pegawai){
		return $this->db->get_where('pegawai',['id_pegawai'=>$id_pegawai])->result();
	}

    public function ubahDataPegawai(){
		$data=[
			'id_pegawai'=>$this->input->post('id_pegawai', true),
            'nama_pegawai'=>$this->input->post('nama_pegawai', true),
            'ttl'=>$this->input->post('ttl', true),
            'jenis_kelamin'=>$this->input->post('jenis_kelamin', true),
            'alamat'=>$this->input->post('alamat', true),
            'no_hp'=>$this->input->post('no_hp', true),
         
		];
        $this->db->where('id_pegawai', $this->input->post('id_pegawai'));	
        $this->db->update('pegawai', $data);
    }
}    

?>    