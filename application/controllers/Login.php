<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Login extends CI_Controller {

	public $form_validation;


	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->library('session');
	}

	public function index()
	{
		$this->load->view('Login');
	}

	public function login()
	{
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		if (!$this->form_validation->run())
		{
			$this->load->view('Login');
		}
		else
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$query = $this->db->select ('employee.name, employee.password')->from('employee')->where('name', $username)->where('password', $password)->get();
			$user = $query->result();

			if (empty($user))
			{
				$data['error'] = 'User does not exist';
				$this->load->view('Login', $data);
			}else {
				$this->session->set_userdata('username', $username);
				$this->load->view('Home');
			}

		}
	}

}
