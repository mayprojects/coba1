<?php
	class Auth extends CI_Controller
	{
		function __contruct(){
			parent::__construct();
			$this->load->model("m_auth");
			$this->load->library('session');
		}

		function index(){
			if($this->session->has_userdata('ses_id_coba')){
				redirect('admin');
			}else{
				redirect('auth/do_login');
			}
		}

		function do_login(){
			$this->load->view('login.php');
		}

		function do_regis(){
			$this->load->view('login.php');
		}

		function proses_login(){
			$username = htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
			$password = get_hash($this->input->post('password',TRUE),ENT_QUOTES);
			$cek_user = $this->m_auth->auth_petugas($username,$password);

			if($cek_user -> num_rows() > 0){
				//jika login sebagai admin
				$data = $cek_user->row_array();
				$this->session->set_userdata('masuk',TRUE); 
					
			}
		}
	}