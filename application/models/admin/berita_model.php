<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class berita_model extends CI_Model {
    public function tampilBerita()
    {  
        $this->db->select('berita.*');
        return $this->db->get('berita')->result();
    }
    
    public function tampilBeritaOne($id_berita)
    {
        $this->db->select('berita.*');
        $this->db->where('id_berita', $id_berita);
        return $this->db->get('berita')->result();
    }
    
    public function getBerita($id_berita){
		return $this->db->get_where('berita',['id_berita'=>$id_berita])->row();
    }

    public function tambahDataBerita($upload){
		$data=[
            
            'id_berita'=>$this->input->post('berita', true),
            'judul'=>$this->input->post('judul', true),
            'tgl_kegiatan'=>$this->input->post('tgl_kegiatan', true),
            'deskripsi'=>$this->input->post('deskripsi', true),
            'foto'=>$upload['file']['file_name'],			
        ];
	    $this->db->insert('berita', $data);
    }

    public function upload(){    
        $config['upload_path'] = './assets/Upload/berita_image';    
        $config['allowed_types'] = 'jpg|png|jpeg';
        $this->load->library('upload', $config);
        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }

    public function hapusDataBerita($id_berita)
	{
        $this->_deleteImage($id_berita);
		$this->db->where('id_berita', $id_berita);
		$this->db->delete('berita');
    }
    private function _deleteImage($id_berita)
    {
        $berita = $this->getBerita($id_berita);
        $filename = $berita->foto;
        unlink(FCPATH."assets/Upload/berita_image/".$filename);
    }
    
    public function ubahDataBerita($id_berita, $upload){
        $data=
        array(
            'id_berita'     =>$this->input->post('id_berita', true),
            'judul'         =>$this->input->post('judul', true),
            'tgl_kegiatan'  =>$this->input->post('tgl_kegiatan', true),
            'deskripsi'     =>$this->input->post('deskripsi', true),
            'foto'          =>$upload['file']['file_name']
            );
        $this->_deleteImage($id_berita);
        $this->db->where('id_berita', $id_berita);	
        $this->db->update('berita', $data);
      
    }

}
?>