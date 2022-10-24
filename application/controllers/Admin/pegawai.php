<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class pegawai extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/pegawai_model');
            if($this->session->userdata('level') != "admin"){
                redirect('Admin/login', 'refresh');
            }
        }
        
        public function index()
        {
        
           $data['title'] = 'Halaman Data Pegawai';
           $data['pegawai'] = $this->pegawai_model->tampilPegawai(); 
           $this->load->view('template/header_admin',$data);
           $this->load->view('template/sidebar_admin');
           $this->load->view('admin/pegawai/index', $data);
           $this->load->view('template/footer_admin');  
        }

        public function tambah(){
            $data ['title'] = 'Form Menambahkan Data Pegawai';
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'required');
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/pegawai/tambah', $data);
                $this->load->view('template/footer_admin');
                
            }
            else{
                $this->pegawai_model->tambahDataPegawai();
                $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('Admin/pegawai','refresh');
                echo "data berhasil ditambah";
            }	
        }

        public function hapus($id_pegawai)
        {
            if($this->pegawai_model->hapusDataPegawai($id_pegawai) == false)
            {
                $this->session->set_flashdata('flashdata', 'gagal');
                $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data Pegawai di pakai');
                redirect('Admin/pegawai');
            }else{
                $this->load->library('session');
                $this->session->set_flashdata('flashdata', 'dihapus');
                $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
                redirect('Admin/pegawai','refresh');
            }
           
        }

        public function edit($id_pegawai){
            $data ['title'] = 'Form Edit Data Pegawai';
            $this->load->library('form_validation');
            $data ['pegawai'] = $this->pegawai_model->getPegawai($id_pegawai);
            
            $this->form_validation->set_rules('id_pegawai', 'id_pegawai', 'required|numeric');
            $this->form_validation->set_rules('nama_pegawai', 'nama_pegawai', 'required');
            $this->form_validation->set_rules('ttl', 'ttl', 'required|date');
            $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('no_hp', 'no_hp', 'required|numeric');
    
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/pegawai/edit', $data);
                $this->load->view('/template/footer_admin');
            }
            else{
                $this->pegawai_model->ubahDataPegawai();
                $this->load->library('session');
                $this->session->set_flashdata('pesan3','Data Berhasil Di Edit');
                redirect('Admin/pegawai','refresh');
            }	
    
        }
        public function detail($id_pegawai){
            $data['title']='Detail Pegawai';
            $data['pegawai']=$this->pegawai_model->getPegawai($id_pegawai);
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/pegawai/detail', $data);
            $this->load->view('template/footer_admin');
        }  
        /* End of fils admin.php */
    }    
?>