<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class produk_member extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/produk_model');
            
        }
        
        public function index()
        {
        
           $data['title'] = 'Halaman Data Produk';
            $data['produk'] = $this->produk_model->tampilProduk(); 
           $this->load->view('template/header_member',$data);
           $this->load->view('template/sidebar_member');
           $this->load->view('member/produk/index', $data);
           $this->load->view('template/footer_member');  
        }
    }
?>        