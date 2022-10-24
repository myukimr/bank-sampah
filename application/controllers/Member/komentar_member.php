<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class komentar_member extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/komentar_model');
            
        }
        
        public function tambah(){
            $data ['title'] = 'Form Menambahkan Data Komentar';
            $this->load->library('form_validation');
            $this->form_validation->set_rules('komentar', 'komentar', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_member',$data);
                $this->load->view('template/sidebar_member');
                $this->load->view('member/komentar/tambah', $data);
                $this->load->view('template/footer_member');
                
            }
            else{
                $this->komentar_model->tambahDataKomentar();
                $this->session->set_flashdata('pesan','Terimakasih, Komentar Berhasil di Kirim ');
                redirect('Member/komentar_member/tambah','refresh');
                echo "data berhasil ditambah";
            }	
        }
    }
?>        