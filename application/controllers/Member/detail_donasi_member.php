<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');

    class detail_donasi_member extends CI_Controller {
    
        
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
           $data['detail_donasi'] = $this->detail_donasi_model->tampilDetailDonasiMember($this->session->userdata('id_user'));
           $data['poin'] = $this->detail_donasi_model->getUser($this->session->userdata('id_user')); 
           $this->load->view('template/header_member',$data);
           $this->load->view('template/sidebar_member');
           $this->load->view('member/detail_donasi/index', $data);
           $this->load->view('template/footer_member');  
        }

        public function tambah(){
                $data ['title'] = 'Form Menambahkan Data Detail Donasi';
                $data['detail_donasi'] = $this->detail_donasi_model->tampilDetailDonasiMember($this->session->userdata('id_user'));
                $data['user'] = $this->user_model->tampilUser();
                $data['donasi'] = $this->donasi_model->tampilDonasi();
                $this->load->library('form_validation');
                $this->form_validation->set_rules('berat', 'berat', 'required');
                
                
                if($this->form_validation->run() == FALSE){
                    $this->load->view('template/header_member',$data);
                    $this->load->view('template/sidebar_member');
                    $this->load->view('member/detail_donasi/tambah', $data);
                    $this->load->view('template/footer_member');
                    
                }
                else{
                        $upload = $this->detail_donasi_model->upload();
                            if ($upload['result'] == 'success') {
                                $this->detail_donasi_model->tambahDataDetailDonasiMember($upload);
                                $this->session->set_flashdata('pesan','Transaksi Donasi Anda berhasil mohon tunggu konfirmasi');
                                redirect('Member/detail_donasi_member','refresh');
                    }else{
                        echo $upload['error'];
                    }
                }	
        }

    public function pdf()
    {
        $this->load->library('dompdf_gen');

        $data['detail_donasi_member'] = $this->detail_donasi_model->tampilDetailDonasiMember($this->session->userdata('id_user'));
        $data['poin'] = $this->detail_donasi_model->getUser($this->session->userdata('id_user'));
        $data['user'] = $this->detail_donasi_model->getUser($this->session->userdata('id_user'));
        $this->load->view('laporan_pdf', $data);
        $paper_size = 'A4';
        $orientation = 'potrait';
        $html = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("Penukaran Poin Bank Sampah Malang.pdf", array('Attachment' => 0));
    }

   
}
?>       