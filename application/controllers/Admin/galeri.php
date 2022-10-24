<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class galeri extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/galeri_model');

            if($this->session->userdata('level') != "admin"){
                redirect('Admin/login', 'refresh');
            }
        }
        
        public function index()
        {
        
           $data['title'] = 'Halaman Data Galeri';
           $data['galeri'] = $this->galeri_model->tampilGaleri();
           $this->load->view('template/header_admin',$data);
           $this->load->view('template/sidebar_admin');
           $this->load->view('admin/galeri/index', $data);
           $this->load->view('template/footer_admin');  
        }

        public function tambah(){
            $data ['title'] = 'Form Menambahkan Data Galeri';
            $data['galeri'] = $this->galeri_model->tampilGaleri();
            $this->load->library('form_validation');
            $this->form_validation->set_rules('judul', 'judul', 'required');
            
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('template/header_admin',$data);
                $this->load->view('template/sidebar_admin');
                $this->load->view('admin/galeri/tambah', $data);
                $this->load->view('template/footer_admin');
                
            }
            else{
                $upload = $this->galeri_model->upload();
                    if ($upload['result'] == 'success') {
                        $this->galeri_model->tambahDataGaleri($upload);
                        $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
                redirect('Admin/galeri','refresh');
            }else{
                echo $upload['error'];
            }
        }	
    }

    public function hapus($id_galeri){
        $this->galeri_model->hapusDataGaleri($id_galeri);
        $this->load->library('session');
        $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
        redirect('Admin/galeri','refresh');
    }

    public function edit($id_galeri){
		$data ['title'] = 'Form Edit Data Galeri';
		$this->load->library('form_validation');
        $data ['galeri'] = $this->galeri_model->tampilGaleriOne($id_galeri);
    
		$this->form_validation->set_rules('id_galeri', 'id_galeri', 'required|numeric');
        $this->form_validation->set_rules('judul', 'judul', 'required');
		
		if($this->form_validation->run() == FALSE){
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/galeri/edit', $data);
            $this->load->view('template/footer_admin');
		}
		else{
                $upload = $this->galeri_model->upload();
                    if ($upload['result'] == 'success') {
                        $this->galeri_model->ubahDataGaleri($id_galeri, $upload);
                        $this->session->set_flashdata('pesan3','Data Berhasil Di edit');
                        $this->load->library('session');
                redirect('Admin/galeri','refresh');
            }else{
                echo $upload['error'];
            }	
		}	
    }

    public function detail($id_galeri){
        $data['title']='Detail Galeri';
        $data['galeri']=$this->galeri_model->tampilGaleriOne($id_galeri);
        $this->load->view('template/header_admin',$data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('admin/galeri/detail', $data);
        $this->load->view('template/footer_admin');
    }    

}   
    
?>        
