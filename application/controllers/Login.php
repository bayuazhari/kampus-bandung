<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model('app_model');
	}

	public function index()
	{
		$this->form_validation->set_rules('username','Username','required|alpha_numeric|trim');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|trim');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('form_login');
		}else{
			$valid_user = $this->app_model->check_credential();
			
			if($valid_user == FALSE){
				$this->session->set_flashdata('error','Maaf, username atau password yang Anda masukkan salah. Silakan coba lagi');
				redirect('login');
			}else{
				$this->session->set_userdata('id',$valid_user->id);
				$this->session->set_userdata('username',$valid_user->username);
				redirect('home'); 
			}
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url());	
	}
}
