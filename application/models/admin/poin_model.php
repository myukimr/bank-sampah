<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class poin_model extends CI_Model {
    public function tampilPoin()
    {
        $this->db->select('poin.*, user.nama');
        $this->db->join('user', 'poin.id_user = user.id_user');
        return $this->db->get('poin')->result();
    }

    public function getUser($id_user)
    {
      $this->db->select('poin.*, user.nama');
      $this->db->join('user', 'poin.id_user = user.id_user');
      $this->db->where('poin.id_user', $id_user);
      return $this->db->get('poin')->result();
    }

    public function tambahDataPoin(){
      $data=[
        'id_poin'=>$this->input->post('id_poin', true),
              'id_user'=>$this->input->post('nama', true),
              'total_poin'=>$this->input->post('total_poin', true),
      ];
      $this->db->insert('poin', $data);
    }

    public function hapusDataPoin($id_poin)
    {
          $this->db->where('id_poin', $id_poin);
          if(
              $this->db->delete('poin')
              
          ){
              return true;
          }else{
              return false;
          }
    
    }

    public function getPoin($id_poin){
        $this->db->select('poin.*, user.nama');
          $this->db->join('user', 'poin.id_user = user.id_user');
          $this->db->where('id_poin', $id_poin);
          return $this->db->get('poin')->result();
    }
    public function ubahDataPoin($id_poin){
        $data=[
          'total_poin'=>$this->input->post('total_poin', true),

        ];
      $this->db->where('id_poin', $id_poin);	
      // die();
      $this->db->update('poin', $data);
    }
}

?>