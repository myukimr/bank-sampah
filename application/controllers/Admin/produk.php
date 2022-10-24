<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class produk extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/produk_model');
            
        }
        
        public function index()
        {
        
           $data['title'] = 'Halaman Data Produk';
            $data['produk'] = $this->produk_model->tampilProduk(); 
           $this->load->view('template/header_admin',$data);
           $this->load->view('template/sidebar_admin');
           $this->load->view('admin/produk/index', $data);
           $this->load->view('template/footer_admin');  
        }

        public function tambah(){
            $data ['title'] = 'Form Menambahkan Data Produk';
            $data['produk'] = $this->produk_model->tampilProduk();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/produk/tambah', $data);
                $this->load->view('template/footer_admin');
                
            }
            else{
                $upload = $this->produk_model->upload();
                    if ($upload['result'] == 'success') {
                        $this->produk_model->tambahDataProduk($upload);
                        $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('Admin/produk','refresh');
            }else{
                echo $upload['error'];
            }
        }	
    }
    public function hapus($id_produk){
        $this->produk_model->hapusDataProduk($id_produk);
        $this->load->library('session');
        $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
        redirect('Admin/produk','refresh');
    }

    public function edit($id_produk){
		$data ['title'] = 'Form Edit Data Produk';
		$this->load->library('form_validation');
        $data ['produk'] = $this->produk_model->tampilProdukOne($id_produk);
    
		$this->form_validation->set_rules('id_produk', 'id_produk', 'required|numeric');
        $this->form_validation->set_rules('nama', 'nama', 'required');
		
		if($this->form_validation->run() == FALSE){
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/produk/edit', $data);
            $this->load->view('template/footer_admin');
		}
		else{
                $upload = $this->produk_model->upload();
                    if ($upload['result'] == 'success') {
                        $this->produk_model->ubahDataProduk($id_produk, $upload);
                        $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                        $this->load->library('session');
                redirect('Admin/produk','refresh');
            }else{
                echo $upload['error'];
            }	
		}	
    }

    public function detail($id_produk){
        $data['title']='Detail Produk';
        $data['produk']=$this->produk_model->tampilProdukOne($id_produk);
        $this->load->view('template/header_admin',$data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('admin/produk/detail', $data);
        $this->load->view('template/footer_admin');
    }   
    }
?>        