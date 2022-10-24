<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class galeri_model extends CI_Model {
   
   
    public function tampilGaleri()
    {
        $this->db->select('galeri.*');
        return $this->db->get('galeri')->result();
    }
    public function tampilGaleriOne($id_galeri)
    {
        $this->db->select('galeri.*');
        $this->db->where('id_galeri', $id_galeri);
        return $this->db->get('galeri')->result();
    }
    

    public function getGaleri($id_galeri){
		return $this->db->get_where('galeri',['id_galeri'=>$id_galeri])->row();
    }

    public function tambahDataGaleri($upload){
		$data=[
            
            'id_galeri'=>$this->input->post('galeri', true),
            'judul'=>$this->input->post('judul', true),
            'foto'=>$upload['file']['file_name'],			
        ];
	    $this->db->insert('galeri', $data);
    }

    public function upload(){    
        $config['upload_path'] = './assets/Upload/galeri_image/';    
        $config['allowed_types'] = 'jpg|png|jpeg';

        $this->load->library('upload', $config);

        if($this->upload->do_upload('foto')){
            $return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');      
            return $return;
        }else{    
            $return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());      return $return;   
        }  
    }
    public function hapusDataGaleri($id_galeri)
	{
        $this->_deleteImage($id_galeri);
		$this->db->where('id_galeri', $id_galeri);
        $this->db->delete('galeri');
    }
    private function _deleteImage($id_galeri)
    {
        $galeri = $this->getGaleri($id_galeri);
        $filename = $galeri->foto;
        unlink(FCPATH."assets/Upload/galeri_image/".$filename);
    }
    
    public function ubahDataGaleri($id_galeri, $upload){
        $data=array(
        'id_galeri' =>$this->input->post('id_galeri', true),
        'judul'     =>$this->input->post('judul', true),
        'foto'      =>$upload['file']['file_name'],
        );
        $this->_deleteImage($id_galeri);
        $this->db->where('id_galeri', $id_galeri);	
        $this->db->update('galeri', $data);
    }

}

?>