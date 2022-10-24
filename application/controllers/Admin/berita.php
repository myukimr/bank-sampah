<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class berita extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/berita_model');
            if($this->session->userdata('level') != "admin"){
                redirect('Admin/login', 'refresh');
            }
        }

        public function index()
        {
            $data['berita'] = $this->berita_model->tampilBerita(); 
            $data['title'] = 'Halaman Berita';
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/berita/index', $data);
            $this->load->view('template/footer_admin');
        }

        public function tambah(){
            $data ['title'] = 'Form Menambahkan Data Berita';
            $data['berita'] = $this->berita_model->tampilBerita();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('judul', 'judul', 'required');
            $this->form_validation->set_rules('tgl_kegiatan', 'tgl_kegiatan', 'required');
            $this->form_validation->set_rules('deskripsi', 'deskripsi', 'required');
            
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/berita/tambah', $data);
                $this->load->view('template/footer_admin');
                
            }
            else{
                $upload = $this->berita_model->upload();
                    if ($upload['result'] == 'success') {
                        $this->berita_model->tambahDataBerita($upload);
                        $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('Admin/berita','refresh');
            }else{
                echo $upload['error'];
            }
        }	
    }

        public function hapus($id_berita)
        {
            $this->berita_model->hapusDataBerita($id_berita);
            $this->load->library('session');
            $this->session->set_flashdata('flashdata', 'dihapus');
            $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
            redirect('Admin/berita','refresh');
        }

        public function edit($id_berita){
            $data ['title'] = 'Form Edit Data Berita';
            $this->load->library('form_validation');
            $data ['berita'] = $this->berita_model->tampilBeritaOne($id_berita);
        
            $this->form_validation->set_rules('id_berita', 'id_berita', 'required|numeric');
            $this->form_validation->set_rules('judul', 'judul', 'required');
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/berita/edit', $data);
                $this->load->view('template/footer_admin');
            }
            else{
                    $upload = $this->berita_model->upload();
                        if ($upload['result'] == 'success') {
                            $this->berita_model->ubahDataBerita($id_berita, $upload);
                            $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                            $this->load->library('session');
                    redirect('Admin/berita','refresh');
                }else{
                    echo $upload['error'];
                }	
            }	
        }
        public function detail($id_berita){
            $data['title']='Detail Berita';
            $data['berita']=$this->berita_model->tampilBeritaOne($id_berita);
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin', $data);
            $this->load->view('admin/berita/detail', $data);
            $this->load->view('template/footer_admin',$data);   
        }   

    }
?>        