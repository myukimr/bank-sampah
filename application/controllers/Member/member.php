<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class member extends CI_Controller {
    
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('admin/user_model');
        }
        
        public function index()
        {

        //$data['user'] = $this->user_model->getUser($id_user); 
        $data['title'] = 'Halaman Dashboard Member';
        $this->load->view('template/header_member', $data);
        $this->load->view('template/sidebar_member', $data);
        $this->load->view('member/home/index', $data);
        $this->load->view('template/footer_member', $data);
        }
    }
        /* End of fils admin.php */
    

?>