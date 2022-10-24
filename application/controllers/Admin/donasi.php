<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class donasi extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/donasi_model');
            $this->load->model('admin/user_model');
            $this->load->model('admin/pegawai_model');
            $this->load->model('admin/detail_donasi_model');
            
        }
        
        public function index()
        {
        
           $data['title'] = 'Halaman Data Donasi';
           $data['donasi'] = $this->donasi_model->tampilDonasi(); 
           $this->load->view('template/header_admin',$data);
           $this->load->view('template/sidebar_admin');
           $this->load->view('admin/donasi/index', $data);
           $this->load->view('template/footer_admin');  
        }

        public function tambah(){
            $data ['title'] = 'Form Menambahkan Data Donasi';
            $data['user'] = $this->user_model->tampilUser();
            $data['pegawai'] = $this->pegawai_model->tampilPegawai();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('tgl_donasi', 'tgl_donasi', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/donasi/tambah', $data);
                $this->load->view('template/footer_admin');
                
            }
            else{
                $this->donasi_model->tambahDataDonasi();
                $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('Admin/donasi','refresh');
                echo "data berhasil ditambah";
            }	
        }

      
        public function hapus($id_donasi)
        {
            if( $this->donasi_model->hapusDataDonasi($id_donasi) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data Donasi di pakai');
                redirect('Admin/donasi','refresh');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('Admin/donasi','refresh');
            }
            
        }

        public function edit($id_donasi){
            $data ['title'] = 'Form Edit Data Donasi';
            $this->load->library('form_validation');
            $data ['donasi'] = $this->donasi_model->getDonasi($id_donasi);
            $data['user'] = $this->user_model->tampilUser();
            $data['pegawai'] = $this->pegawai_model->tampilPegawai(); 
        
            $this->form_validation->set_rules('id_pegawai', 'id_pegawai', 'required');
            $this->form_validation->set_rules('tgl_donasi', 'tgl_donasi', 'required');
            $this->form_validation->set_rules('tgl_pengambilan', 'tgl_pengambilan', 'required');
            $this->form_validation->set_rules('status', 'status', 'required');

            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/donasi/edit', $data);
                $this->load->view('/template/footer_admin');
            }
            else{
                $this->donasi_model->ubahDataDonasi($id_donasi);
                $this->load->library('session');
                $this->session->set_flashdata('pesan3','Data Berhasil Di Edit');
                redirect('Admin/donasi','refresh');
            }	
    
        }

        public function detail($id_donasi){
            $data['title']='Detail Pengembalian Donasi';
            $data['donasi']=$this->donasi_model->getDetailDonasi($id_donasi);
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/donasi/detail', $data);
            $this->load->view('template/footer_admin');
      
        } 

    }
?>        