<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('login_model');        
    }

    public function index()
    {
        $data2['title'] = 'Login';
        $this->load->view('login/index',$data2);
    }

    public function proses_login(){

		$this->load->model("login_model");
		$form_response = $this->input->post('g-recaptcha-response');
		$url = "https://www.google.com/recaptcha/api/siteverify";
		$secretkey = "6LcizvEUAAAAAM8AXWccfH8k5At6Z2QGkr20Z430";
		$response = file_get_contents($url."?secret=".$secretkey."&response=".$form_response."&remoteip=".$_SERVER["REMOTE_ADDR"]);
		$data = json_decode($response);
		print_r($data);

		$username=htmlspecialchars($this->input->post('username'));
        $password=htmlspecialchars($this->input->post('password'));
		
		$ceklogin=$this->login_model->login($username, $password);
		if(isset($data->success) && $data->success=="true"){
			if ($ceklogin != false) {
				foreach ($ceklogin as $row) {
				$this->load->library('session');
				$this->session->set_userdata('username', $row->username);
				$this->session->set_userdata('id_user', $row->id_user );
				$this->session->set_userdata('level', $row->level);
				$this->session->set_userdata('nama', $row->nama );
				}	
				if($this->session->userdata('level')=='admin'){
				redirect('Admin/admin');
				}
				else if($this->session->userdata('level')=='member'){
				redirect('member/member');
				}
			}
			else{
				$data2['title'] = 'Login';
				$this->load->view('login/index');
				$this->session->set_flashdata('pesan','Username dan Password Anda salah');
				redirect('Admin/login');
			}		
		}
		else{
			$data2['title'] = 'Login';
			$this->load->view('login/index');
			$this->session->set_flashdata('errorRecaptcha', 'ReCAPTCHA not solved/an error occured'.$status);
			redirect('Admin/login');
		}
	}
		public function logout(){
			$this->session->sess_destroy();
			redirect('Admin/login', 'refresh');
		}


}
/* End of file Controllername.php */
?>