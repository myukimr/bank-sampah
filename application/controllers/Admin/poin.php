<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class poin extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/poin_model');
            $this->load->model('admin/user_model');
            
        }
        
        public function index()
        {
        
           $data['title'] = 'Halaman Data Poin';
           $data['poin'] = $this->poin_model->tampilPoin(); 
           $this->load->view('template/header_admin',$data);
           $this->load->view('template/sidebar_admin');
           $this->load->view('admin/poin/index', $data);
           $this->load->view('template/footer_admin');  
        }

        public function tambah(){
            $data ['title'] = 'Form Menambahkan Data poin';
            $data['user'] = $this->user_model->tampilUser();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('total_poin', 'total_poin', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/poin/tambah', $data);
                $this->load->view('template/footer_admin');
                
            }
            else{
                $this->poin_model->tambahDataPoin();
                $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('Admin/poin','refresh');
                echo "data berhasil ditambah";
            }	
        }

        public function hapus($id_poin)
        {
            if( $this->poin_model->hapusDataPoin($id_poin) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data Poin di pakai');
                redirect('Admin/poin','refresh');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('Admin/poin','refresh');
            }
            
        }

        public function edit($id_poin){
            $data ['title'] = 'Form Edit Data Poin';
            $this->load->library('form_validation');
            $data ['poin'] = $this->poin_model->getPoin($id_poin);
            $data['user'] = $this->user_model->tampilUser();
            
            $this->form_validation->set_rules('id_user', 'id_user', 'required|numeric');
            $this->form_validation->set_rules('total_poin', 'total_poin', 'required');
           
    
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/poin/edit', $data);
                $this->load->view('/template/footer_admin');
            }
            else{
                $this->poin_model->ubahDataPoin($id_poin);
                $this->load->library('session');
                $this->session->set_flashdata('pesan3','Data Berhasil Di Edit');
                redirect('Admin/poin','refresh');
            }	
    
        }
        public function detail($id_poin){
            $data['title']='Detail Poin';
            $data['poin']=$this->poin_model->getPoin($id_poin);
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/poin/detail', $data);
            $this->load->view('template/footer_admin');
      
        }    
    }
?>        