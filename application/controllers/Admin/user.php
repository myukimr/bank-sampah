<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/user_model');
        if($this->session->userdata('level') != "admin"){
            redirect('Admin/login', 'refresh');
        }
    }

    public function index()
    {
        $data['user'] = $this->user_model->tampilUser(); 
        $data['title'] = 'Halaman Data User';
            
        $this->load->view('template/header_admin',$data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('admin/user/index', $data);
        $this->load->view('template/footer_admin');
    }

    public function tambah(){
        $data ['title'] = 'Tambah Data Admin dan User';
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'required');
		if($this->form_validation->run() == FALSE){
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/user/tambah', $data);
            $this->load->view('template/footer_admin');
			
		}
		else{
            $this->user_model->tambahDataUser();
            // $this->session->set_flashdata('name', 'value');
            $this->session->set_flashdata('pesan','Data Berhasil Di tambah');
			redirect('Admin/user','refresh');
			echo "data berhasil ditambah";
		}	
    }

    public function hapus($id_user)
    {
        if($this->user_model->hapusDataUser($id_user) == false)
        {
            $this->session->set_flashdata('flashdata', 'gagal');
            $this->session->set_flashdata('pesan2','Gagal Di hapus, Karena Data User di pakai');
            redirect('Admin/user');
        }else{
            $this->load->library('session');
            $this->session->set_flashdata('flashdata', 'dihapus');
            $this->session->set_flashdata('pesan2','Data Berhasil Di hapus');
            redirect('Admin/user','refresh');
        }
       
    }

    public function edit($id_user){
		$data ['title'] = 'Form Edit Data Admin dan User';
		$this->load->library('form_validation');
		$data ['user'] = $this->user_model->getUser($id_user);
		
		$this->form_validation->set_rules('id_user', 'id_user', 'required|numeric');
        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
        $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
        $this->form_validation->set_rules('level', 'level', 'required');
        $this->form_validation->set_rules('status', 'status', 'required');
		
		if($this->form_validation->run() == FALSE){
            $this->load->view('template/header_admin',$data);
            $this->load->view('template/sidebar_admin');
            $this->load->view('admin/user/edit', $data);
            $this->load->view('/template/footer_admin');
		}
		else{
			$this->user_model->ubahDataUser();
			$this->load->library('session');
            $this->session->set_flashdata('pesan3','Data Berhasil Di Edit');
			redirect('Admin/user','refresh');
		}	
    }

    public function detail($id_user){
        $data['title']='Detail User';
        $data['user']=$this->user_model->getUser($id_user);
        $this->load->view('template/header_admin',$data);
        $this->load->view('template/sidebar_admin');
        $this->load->view('admin/user/detail', $data);
        $this->load->view('template/footer_admin');
    }    


}    