<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calendar extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
	}
	public function calendar()
	{
		$this->load->view('calendar');
	}
	public function date_input ()
	{
		$this->load->helper('url');
		$date = $this->input->post('date_input');
		$query = $this->db->query("SELECT * FROM form_request WHERE date_debut = '$date'");
		$data['form_request'] = $query->result();
		$this->load->view('calendar', $data);
	}
}
