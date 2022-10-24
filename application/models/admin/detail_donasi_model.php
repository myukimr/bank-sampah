<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class detail_donasi_model extends CI_Model {
    public function tampilDetailDonasi()
    {
        $this->db->select('detail_donasi.*, user.nama');
        $this->db->join('user', 'detail_donasi.id_user = user.id_user');
        //$this->db->join('donasi', 'detail_donasi.id_donasi = donasi.id_donasi');
        //$this->db->join('user', 'donasi.id_user = user.id_user');
        //$this->db->join('donasi', 'detail_donasi.id_donasi = donasi.id_donasi');

        return $this->db->get('detail_donasi')->result();
    }

    public function tampilDetailDonasiMember($id_user)
    {
        $this->db->select('detail_donasi.*, donasi.tgl_donasi, pegawai.nama_pegawai, donasi.tgl_pengambilan');
        $this->db->join('user', 'detail_donasi.id_user = user.id_user');
        $this->db->join('donasi', 'detail_donasi.id_donasi = donasi.id_donasi');
        $this->db->join('pegawai', 'donasi.id_pegawai = pegawai.id_pegawai');
        //$this->db->join('user', 'donasi.id_user = user.id_user');
        //$this->db->join('donasi', 'detail_donasi.id_donasi = donasi.id_donasi');
        $this->db->where('detail_donasi.id_user', $id_user);
        return $this->db->get('detail_donasi')->result();
    }



    public function tambahDataDetailDonasi($upload){
      $data2=[
        //'tgl_donasi'=> date('Y-m-d'),
        'id_user'=>$this->input->post('nama', true),
        'status'=> 'BELUM',
      ];
      $this->db->insert('donasi', $data2);
      foreach($this->dataBaru() as $d){
        $data=[
            
          'id_detail_donasi'=>$this->input->post('detail_donasi', true),
          //'id_donasi'=>$this->input->post('nama_donatur', true),
          'id_donasi'=>$d->id_donasi,
          'id_user'=>$this->input->post('nama', true),
          'jenis_donasi'=>$this->input->post('jenis_donasi', true),
          'berat'=>$this->input->post('berat', true),
          'alamat'=>$this->input->post('alamat', true),
          'no_hp'=>$this->input->post('no_hp', true),
          'foto'=>$upload['file']['file_name'],			
      ];
      $this->db->insert('detail_donasi', $data);
      }
      $this->db->select('*');
      $this->db->from('poin');
      $this->db->where('id_user',$this->input->post('nama', true));
      $this->db->limit(1);
  
      $query=$this->db->get();
       if($query->num_rows() == 0){
        if($this->input->post('berat') > 1){
          $poin = 1;
        }
        $data4=[
          'id_user'=>$this->input->post('nama', true),
          'total_poin'=>$poin,
        ];
        $this->db->insert('poin', $data4);
        }
        else{
  
          $this->db->query("UPDATE poin SET total_poin = total_poin + 1 WHERE id_user = ".$this->input->post('nama', true)."");
        }
       }
    

    
    public function tambahDataDetailDonasiMember($upload){
//echo 
//$this->session->userdata('id_user'); die();

      $data3=[
        //'tgl_donasi'=> date('Y-m-d'),
        'id_user'=> $this->session->userdata('id_user'),
        'status'=> 'BELUM',
      ];
      $this->db->insert('donasi', $data3);
      foreach($this->dataBaru() as $d){
        $data=[
            
          'id_detail_donasi'=>$this->input->post('detail_donasi', true),
          //'id_donasi'=>$this->input->post('nama_donatur', true),
          'id_donasi'=>$d->id_donasi,
          'id_user'=> $this->session->userdata('id_user'),
          'jenis_donasi'=>$this->input->post('jenis_donasi', true),
          'berat'=>$this->input->post('berat', true),
          'alamat'=>$this->input->post('alamat', true),
          'no_hp'=>$this->input->post('no_hp', true),
          'foto'=>$upload['file']['file_name'],			
      ];
    $this->db->insert('detail_donasi', $data);
    $this->db->select('*');
		$this->db->from('poin');
		$this->db->where('id_user', $this->session->userdata('id_user'));
		$this->db->limit(1);

		$query=$this->db->get();
     if($query->num_rows() == 0){
      if($this->input->post('berat') > 1){
        $poin = 1;
      }
      $data4=[
        'id_user'=> $this->session->userdata('id_user'),
        'total_poin'=>$poin,
      ];
      $this->db->insert('poin', $data4);
      }
      else{

        $this->db->query("UPDATE poin SET total_poin = total_poin + 1 WHERE id_user = ".$this->session->userdata('id_user')."");
      }
     }
    }

    //untuk memanggil data baru yang masuk
    public function dataBaru()
    {
      $this->db->order_by('id_donasi', 'desc');
      $this->db->limit(1);
      return $this->db->get('donasi')->result();
    }

    public function upload(){    
        $config['upload_path'] = './assets/Upload/donasi_image/';    
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    
    public function hapusDataDetailDonasi($id_detail_donasi)
    {
          $this->db->where('id_detail_donasi', $id_detail_donasi);
          if(
              $this->db->delete('detail_donasi')
              
          ){
              return true;
          }else{
              return false;
          }
    
      }


      public function getDetailDonasi($id_detail_donasi){
        $this->db->select('detail_donasi.*, user.nama, donasi.*');
        $this->db->join('user', 'detail_donasi.id_user = user.id_user');
        $this->db->join('donasi', 'detail_donasi.id_donasi = donasi.id_donasi');
        $this->db->where('id_detail_donasi', $id_detail_donasi);
        return $this->db->get('detail_donasi')->result();
      }
      public function ubahDataDetailDonasi($id_detail_donasi, $upload){
        $data=[
          'id_user'=>$this->input->post('id_user', true),
          'id_donasi'=>$this->input->post('id_donasi', true),
          'jenis_donasi'=>$this->input->post('jenis_donasi', true),
          'berat'=>$this->input->post('berat', true),
          'alamat'=>$this->input->post('alamat', true),
          'no_hp'=>$this->input->post('no_hp', true),
          'foto'=>$upload['file']['file_name']
        ];
        $this->db->where('id_detail_donasi', $id_detail_donasi);	
        $this->db->update('detail_donasi', $data);      
      }

      public function getUser($id_user)
      {
        $this->db->select('poin.*, user.nama');
        $this->db->join('user', 'poin.id_user = user.id_user');
        $this->db->where('poin.id_user', $id_user);
        return $this->db->get('poin')->result();
      }
  

    
}

?>