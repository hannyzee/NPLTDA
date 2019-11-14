<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('project_model');
	}
	//code for submiting new project form

	public function newproject()
	{
		$projectCode = $this->input->post('pcode');
		$companyCode = $this->input->post('ccode');
		$projectName = $this->input->post('pname');
		$projectDiscription = $this->input->post('pdicrip');
		$estimatedBill = $this->input->post('ebill');
		$startDate = $this->input->post('sdate');
		$endDate = $this->input->post('edate');
		$createdby = $this->input->post('createdby');

		$this->project_model->new_project(array(
			$projectCode,
			$companyCode,
			$projectName,
			$projectDiscription,
		    $estimatedBill,
			$startDate,
			$endDate,
			$createdby
		));
		redirect('home/dashboard');
		
	}

//code for inserting new client
public function newclient()
 {
 	$clientCode = $this->input->post('ccode');
 	$companyName =$this->input->post('company_name');
 	$companyemail =$this->input->post('email');
 	$companyAddress = $this->input->post('address');
 	$contactPerson = $this->input->post('contact_person');
 	$contactPhone = $this->input->post('phone');
 	$phoneNumber = $this->input->post('cnum');

 	$this->project_model->new_client(array(
 		$clientCode,
 		$companyName,
 		$companyemail,
 		$companyAddress,
 		$contactPerson,
 		$contactPhone,
 		$phoneNumber
 	));
 	redirect('home/dashboard');
 } 

 // code submitting the supervisor form
 public function newsupervisor()
 {
 	$employercode = $this->input->post('ecode');
 	$firstName = $this->input->post('ename');
 	$lastName = $this->input->post('lname');
 	$gender = $this->input->post('sex');
 	$email = $this->input->post('email');
 	$phoneNumber = $this->input->post('phone');
 	$address = $this->input->post('address');

 	$this->project_model->new_supervisor(array(
 	$employercode,
 	$firstName,
 	$lastName,
 	$gender,
 	$email,
 	$phoneNumber,
 	$address
 ));
 	redirect('home/dashboard');

 }

 //dispplay project form
	public function projects()
	{
		$this->load->view('project');
	}

	public function clients($value='')
	{
		$this->load->view('client');
	}

	public function supervisors($value='')
	{
		$asign = $this->project_model->assign_super($pcode);
		$this->load->view('supervisor', ["asign"=>$asign]);
	}

	public function details()
	{
		$pro = $this->project_model->project_log();
		$this->load->view('project-details', ["pro"=>$pro]);
	}
}
