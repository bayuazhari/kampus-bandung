<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class App_model extends CI_Model {

	public function check_credential()
	{
		$username = set_value('username');
		$password = set_value('password');
		$query = $this->db->where('username',$username)->where('password',md5($password))->limit(1)->get('user');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}
	}

	public function get_college()
	{
		$query = $this->db->get('kampus');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function get_server()
	{
		$query = $this->db->where('id','1')->limit(1)->get('server');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}
	}

	public function find($id)
	{
		$query = $this->db->where('id',$id)->limit(1)->get('kampus');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return array();
		}
	}

	public function insert($data)
	{
		$this->db->insert('kampus',$data);
	}

	public function update($id, $data)
	{
		$this->db->where('id',$id)->update('kampus',$data);	
	}

	public function delete($id)
	{
		$this->db->where('id',$id)->delete('kampus');
	}

	public function update_server($id, $data)
	{
		$this->db->where('id',$id)->update('server',$data);	
	}
}