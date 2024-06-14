<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function request()
	{
		$this->load->view('request');
	}
	public function leave_type_input() {
		$this->load->helper('url');
		$leave_type = $this->input->post('leave_type_input');
		$query = $this->db->query("SELECT * FROM form_request WHERE service= '$leave_type'");
		$data['leave_request'] = $query->result();
		$this->load->view('request', $data);
	}
}
