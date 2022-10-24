<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class komentar extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/komentar_model');
            
        }
        
        public function index()
        {
        
           $data['title'] = 'Halaman Data Komentar';
           $data['komentar'] = $this->komentar_model->tampilKomentar(); 
           $this->load->view('template/header_admin',$data);
           $this->load->view('template/sidebar_admin');
           $this->load->view('admin/komentar/index', $data);
           $this->load->view('template/footer_admin');  
        }

        public function hapus($id_komentar)
        {
            $this->komentar_model->hapusDataKomentar($id_komentar);
            $this->load->library('session');
            $this->session->set_flashdata('flashdata', 'dihapus');
            $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
            redirect('Admin/komentar','refresh');
        }
    }
?>        