<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class detail_donasi extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/detail_donasi_model');
            $this->load->model('admin/user_model');
            $this->load->model('admin/donasi_model');
            
        }
        
        public function index()
        {
        
           $data['title'] = 'Halaman Data Detail Donasi';
           $data['detail_donasi'] = $this->detail_donasi_model->tampilDetailDonasi(); 
  
           $this->load->view('template/header_admin',$data);
           $this->load->view('template/sidebar_admin');
           $this->load->view('admin/detail_donasi/index', $data);
           $this->load->view('template/footer_admin');  
        }

        public function tambah(){
            $data ['title'] = 'Form Menambahkan Data Detail Donasi';
            $data['detail_donasi'] = $this->detail_donasi_model->tampilDetailDonasi();
            $data['user'] = $this->user_model->tampilUser();
            $data['donasi'] = $this->donasi_model->tampilDonasi();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('berat', 'berat', 'required');
            
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/detail_donasi/tambah', $data);
                $this->load->view('template/footer_admin');
                
            }
            else{
                $upload = $this->detail_donasi_model->upload();
                    if ($upload['result'] == 'success') {
                        $this->detail_donasi_model->tambahDataDetailDonasi($upload);
                        $this->session->set_flashdata('pesan','Data Berhasil Di Tambah');
                        $this->load->library('session');
                        redirect('Admin/detail_donasi','refresh');
            }else{
                echo $upload['error'];
            }
        }	
    }

   
    public function hapus($id_detail_donasi)
    {
        if( $this->detail_donasi_model->hapusDataDetailDonasi($id_detail_donasi) == false)
        {
            $this->session->set_flashdata('flashdata', 'gagal');
            $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data Transaksi Donasi di pakai');
            redirect('Admin/detail_donasi','refresh');
        }else{
            $this->load->library('session');
            $this->session->set_flashdata('flashdata', 'dihapus');
            $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
            redirect('Admin/detail_donasi','refresh');
        }
        
    }

    public function edit($id_detail_donasi){
        $data ['title'] = 'Form Edit Data Transaksi Donasi';
        $this->load->library('form_validation');
        $data ['detail_donasi'] = $this->detail_donasi_model->getDetailDonasi($id_detail_donasi);
        $data['user'] = $this->user_model->tampilUser();
        $data['donasi'] = $this->donasi_model->tampilDonasi(); 
        
        $this->form_validation->set_rules('id_detail_donasi', 'id_detail_donasi', 'required|numeric');
        $this->form_validation->set_rules('id_user', 'id_user', 'required');
        $this->form_validation->set_rules('jenis_donasi', 'jenis_donasi', 'required');
        $this->form_validation->set_rules('berat', 'berat', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric');
 

        if($this->form_validation->run() == FALSE){
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/detail_donasi/edit', $data);
            $this->load->view('/template/footer_admin');
        }
        else{
            $upload = $this->detail_donasi_model->upload();
                if ($upload['result'] == 'success') {
                    $this->detail_donasi_model->ubahDataDetailDonasi($id_detail_donasi, $upload);
                    $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                    $this->load->library('session');
            redirect('Admin/detail_donasi','refresh');
        }else{
            echo $upload['error'];
        }	
    }	

    }

    public function detail($id_detail_donasi){
        $data['title']='Detail Transaksi Donasi';
        $data['detail_donasi']=$this->detail_donasi_model->getDetailDonasi($id_detail_donasi);
        $this->load->view('template/header_admin',$data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('admin/detail_donasi/detail', $data);
        $this->load->view('template/footer_admin');
  
    }    
}
?>        