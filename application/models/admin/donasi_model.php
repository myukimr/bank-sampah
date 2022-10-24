<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class donasi_model extends CI_Model {
    public function tampilDonasi()
    {
        $this->db->select('donasi.*, user.nama, pegawai.nama_pegawai');
        $this->db->join('user', 'donasi.id_user = user.id_user');
        $this->db->join('pegawai', 'donasi.id_pegawai = pegawai.id_pegawai');
        return $this->db->get('donasi')->result();
    }

    public function tambahDataDonasi(){
      $data=[
        'id_donasi'=>$this->input->post('id_donasi', true),
              'id_user'=>$this->input->post('nama', true),
              'id_pegawai'=>$this->input->post('nama_pegawai', true),
              'tgl_donasi'=>$this->input->post('tgl_donasi', true),
              'tgl_pengambilan'=>$this->input->post('tgl_pengambilan', true),
              'status'=>$this->input->post('status', true),
      ];
      $this->db->insert('donasi', $data);
    }

    public function hapusDataDonasi($id_donasi)
	{
        $this->db->where('id_donasi', $id_donasi);
        if(
            $this->db->delete('donasi')
            
        ){
            return true;
        }else{
            return false;
        }
	
    }

    
    public function getDonasi($id_donasi){
        $this->db->select('donasi.*, user.nama, pegawai.nama_pegawai');
        $this->db->join('user', 'donasi.id_user = user.id_user');
        $this->db->join('pegawai', 'donasi.id_pegawai = pegawai.id_pegawai');
        $this->db->where('id_donasi', $id_donasi);
        return $this->db->get('donasi')->result();  
    }
    public function ubahDataDonasi($id_donasi){
      $data=[
          //'id_user'=> $this->session->userdata('id_user'),
          'id_pegawai'=>$this->input->post('id_pegawai', true),
          'tgl_donasi'=>$this->input->post('tgl_donasi', true),
          'tgl_pengambilan'=>$this->input->post('tgl_pengambilan', true),
          'status'=>$this->input->post('status', true),
        ];
      $this->db->where('id_donasi', $id_donasi);
      $this->db->update('donasi', $data);  
    }
    public function getDetailDonasi($id_donasi){
        $this->db->select('donasi.*, user.nama, pegawai.nama_pegawai');
        $this->db->join('user', 'donasi.id_user = user.id_user');
        $this->db->join('pegawai', 'donasi.id_pegawai = pegawai.id_pegawai');
        $this->db->where('id_donasi', $id_donasi);
        return $this->db->get('donasi')->result();   
    }
}

?>