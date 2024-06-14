<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Form_request extends CI_Controller {

	public $form_validation;

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('form_validation');
		$this->load->database();
	}
	public function form_request()
	{
		$this->load->view('form_request');
	}

	public function Submit ()
	{
		$this->load->library('form_validation');
		$this->form_validation->set_rules('first_name', 'First Name', 'required');
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('service', 'Service', 'required');
		$this->form_validation->set_rules('date_debut', 'Date start', 'required');
		$this->form_validation->set_rules('date_find', 'Date end', 'required');
		if (!$this->form_validation->run())
		{
			$this->load->view('form_request');
		}
		else
		{
			$first_name = $this->input->post('first_name');
			$last_name = $this->input->post('last_name');
			$service = $this->input->post('service');
			$date_start = $this->input->post('date_debut');
			$date_find = $this->input->post('date_find');
			$type_conges = "";
			if ($_SERVER['REQUEST_METHOD'] == 'POST')
			{
				if (isset($_POST['type_conges'])) {
					$type_conges = $_POST['type_conges'];
				}
			}
			$query = $this->db->select('*')
				->from('employee')
				->where('name', $first_name)
				->where('lastName', $last_name)
				->where('service',$service)
				->get();
			$result = $query->result();

			if (empty($result))
			{
				$data['error_user'] = 'User not exists';
				$this->load->view('form_request', $data);
			}else {
				if ($result->num_rows() > 0) {
					return false;
				}
				$this->db->insert('form_request', array('first_name' => $first_name, 'last_name' => $last_name, 'service' => $service, 'date_debut' => $date_start, 'date_find' => $date_find, 'leave_type' => $type_conges));
				$this->load->view('Home');
			}

		}
	}
}
