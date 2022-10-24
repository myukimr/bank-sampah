<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class register extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');
		    $this->load->helper('form');
            $this->load->model('login_model');
            
        }
        
        public function index(){
            $data ['title'] = 'Form Menambahkan Data Register';
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nama', 'nama', 'required');
            $this->form_validation->set_rules('alamat', 'alamat', 'required');
            $this->form_validation->set_rules('jenis_kelamin', 'jenis_kelamin', 'required');
            $this->form_validation->set_rules('no_hp', 'no_hp', 'required');
            $this->form_validation->set_rules('username', 'username', 'required');
            $this->form_validation->set_rules('password', 'password', 'required');
            
            
            if($this->form_validation->run() == FALSE){
                $this->load->view('register/index', $data);
                
            }
            else{
                $this->login_model->registerMember();
                $this->session->set_flashdata('pesan','<center>Register Anda Berhasil!<br>Tunggu Validasi Admin</center>');
                redirect('Admin/login','refresh');
            
            
            }	
        }
    }
?>        