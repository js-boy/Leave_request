<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Creating extends CI_Controller {

		public $form_validation;
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->database();
		}

		public function index()
		{
			$this->load->view('Creating');
		}

		public function creating () {
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('last_name', 'Last Name', 'required');
			$this->form_validation->set_rules('service', 'Service', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if (!$this->form_validation->run())
			{
				$this->load->view('Creating');
			}
			else
			{
				$name = $this->input->post('name');
				$last_name = $this->input->post('last_name');
				$service = $this->input->post('service');
				$password = $this->input->post('password');

				$query = $this->db->select ('employee.name, employee.password')->from('employee')->where('name', $name)->where('password', $password)->get();
				$result = $query->result();

				if (empty($result))
				{
					$this->db->insert('employee', array('name' => $name, 'password' => $password, 'lastName' => $last_name, 'service' => $service));
					$this->session->set_userdata('username', $name);
					$this->load->view('Home');
				}else {
					$data['error'] = 'User already exists';
					$this->session->unset_userdata('username');
					$this->load->view('Login', $data);
				}
			}

		}


	}
