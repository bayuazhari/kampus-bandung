<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		if(!$this->session->userdata('username'))
		{
			redirect('login');	
		}
		$this->load->model('app_model');
	}

	public function index()
	{
		$data['colleges'] = $this->app_model->get_college();
		$data['server'] = $this->app_model->get_server();
		$this->load->view('home', $data);
	}

	public function view_college()
	{
		$data['colleges'] = $this->app_model->get_college();
		$this->load->view('view_all_college', $data);
	}

	public function add_college()
	{
		$this->form_validation->set_rules('nama','Nama Kampus','required');
		$this->form_validation->set_rules('singkatan','Singkatan','required|is_unique[kampus.singkatan]');
		$this->form_validation->set_rules('website','Website','required');
		$this->form_validation->set_rules('latitude','Latitude','required|numeric');
		$this->form_validation->set_rules('longitude','Longitude','required|numeric');
		
		if($this->form_validation->run() == FALSE){
			$this->load->view('form_add_college');
		}else{
			$data = array (
				'nama' => set_value('nama'),
				'singkatan' => set_value('singkatan'),
				'website' => set_value('website'),
				'latitude' => set_value('latitude'),
				'longitude' => set_value('longitude')
			);
			$this->app_model->insert($data);
			redirect('home/view_college');
		}
	}

	public function edit_college($id)
	{
		$this->form_validation->set_rules('nama','Nama Kampus','required');
		$this->form_validation->set_rules('singkatan','Singkatan','required');
		$this->form_validation->set_rules('website','Website','required');
		$this->form_validation->set_rules('latitude','Latitude','required|numeric');
		$this->form_validation->set_rules('longitude','Longitude','required|numeric');
		
		if($this->form_validation->run() == FALSE){
			$data['college'] = $this->app_model->find($id);
			$this->load->view('form_edit_college', $data);
		}else{
			$data = array (
				'nama' => set_value('nama'),
				'singkatan' => set_value('singkatan'),
				'website' => set_value('website'),
				'latitude' => set_value('latitude'),
				'longitude' => set_value('longitude')
			);
			$this->app_model->update($id, $data);
			redirect('home/view_college');
		}
	}

	public function delete_college($id)
	{
		$this->app_model->delete($id);
		redirect('home/view_college');	
	}

	public function view_server()
	{
		$data['server'] = $this->app_model->get_server();
		$this->load->view('server_detail', $data);
	}

	public function edit_server($id)
	{
		$this->form_validation->set_rules('site','Site','required');
		$this->form_validation->set_rules('port','Port','required');
		
		if($this->form_validation->run() == FALSE){
			$data['server'] = $this->app_model->get_server();
			$this->load->view('form_edit_server', $data);
		}else{
			$data = array (
				'site' => set_value('site'),
				'port' => set_value('port')
			);
			$this->app_model->update_server($id, $data);
			redirect('home/view_server');
		}
	}
}
