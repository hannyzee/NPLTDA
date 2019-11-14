<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
	}
	//code for submiting new employee contact form

	public function new_contract()
	{
		$employeecode = $this->input->post('ecode');
		$firstName = $this->input->post('ename');
		$lastName = $this->input->post('lname');
		$gender = $this->input->post('sex');
		$email = $this->input->post('email');
		$phoneNumber = $this->input->post('phone');
		$role = $this->input->post('role');
		$joiningdate = $this->input->post('jdate');
		$salary = $this->input->post('salary');
		$address = $this->input->post('address');

		$this->employee_model->newcontract(array(
			$employeecode,
			$firstName,
			$lastName,
			$gender,
			$email,
			$phoneNumber,
			$role,
			$joiningdate,
			$salary,
			$address
		));
		redirect('home/dashboard');
	}

	public function contacts()
	{
	
		$con = $this->employee_model->contract_staff();
		$this->load->view('contact', ["con"=>$con]);
	}

	public function contract()
	{
		$this->load->view('contract_staff');
	}


}
