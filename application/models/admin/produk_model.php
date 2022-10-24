<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class produk_model extends CI_Model {
    public function tampilProduk()
    {
        $this->db->select('produk.*');
        return $this->db->get('produk')->result();
    }
    public function tampilProdukOne($id_produk)
    {
        $this->db->select('produk.*');
        $this->db->where('id_produk', $id_produk);
        return $this->db->get('produk')->result();
    }
    
    public function getProduk($id_produk){
		return $this->db->get_where('produk',['id_produk'=>$id_produk])->row();
    }

    public function tambahDataProduk($upload){
		$data=[
            
            'id_produk'=>$this->input->post('id_produk', true),
            'nama'=>$this->input->post('nama', true),
            'deskripsi'=>$this->input->post('deskripsi', true),
            'foto'=>$upload['file']['file_name'],			
        ];
	    $this->db->insert('produk', $data);
    }
   
    public function upload(){    
        $config['upload_path'] = './assets/Upload/produk_image/';    
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    public function hapusDataProduk($id_produk)
	{
        $this->_deleteImage($id_produk);
		$this->db->where('id_produk', $id_produk);
        $this->db->delete('produk');
    }
    
    private function _deleteImage($id_produk)
    {
        $produk = $this->getProduk($id_produk);
        $filename = $produk->foto;
        unlink(FCPATH."assets/Upload/produk_image/".$filename);
    }

    public function ubahDataProduk($id_produk, $upload){
        $data=[
          'id_produk'=>$this->input->post('id_produk', true),
          'nama'=>$this->input->post('nama', true),
          'deskripsi'=>$this->input->post('deskripsi', true),
          'foto'=>$upload['file']['file_name']
  
        ];
        $this->_deleteImage($id_produk);
        $this->db->where('id_produk', $id_produk);	
        $this->db->update('produk', $data);
      
    }
}

?>