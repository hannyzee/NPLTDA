<?php
/**
 * 
 */
class Timecard extends CI_Controller
{
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('timecard_model');
		$this->session->set_userdata('myname', 'userid');
	}

	//code for submitting timecard from

	public function new_timecard()
	{
		$timecard_code = $this->input->post('tcid');
		$employeecode = $this->input->post('ecode');
		$dateissued = $this->input->post('date_issued');
		$dateworked = $this->input->post('date_worked');
		$projectcode = $this->input->post('pcode');
		$billable = $this->input->post('bill_hours');
		$projectsupervisor = $this->input->post('supervisor');
		$created_by = $this->input->post('createdby');


		$this->timecard_model->time_card(array(
			$timecard_code,
			$employeecode,
			$dateissued,
			$dateworked,
			$projectcode,
			$billable,
			$projectsupervisor,
			$createdby
		));

		redirect('home/dashboard');
	}
	//code for submiting timecard expense form

	public function expense()
	{
		$expense_code = $this->input->post('teid');
		$timecard_code = $this->input->post('tcid');
		$expense_date = $this->input->post('expense_date');
		$expense_amount = $this->input->post('expense_amount');
		$projectcode = $this->input->post('pcode');
		$employeecode = $this->input->post('ecode');
		$created_by = $this->input->post('createdby');


		$this->timecard_model->expenses(array(
			$expense_code,
			$timecard_code,
			$expense_date,
			$expense_amount,
			$projectcode,
			$employeecode,
			$created_by
		));

		redirect('home/dashboard');
	}
	// displays timecard expense form

	public function timecardexpenses()
	{
		$this->load->view('timecardexpense');
	}

	//display time card form

	public function Timecards()
	{
		$this->load->view('timecard');
	}

	public function expense_details()
	{
		$exp = $this->timecard_model->expense_logs();
		$this->load->view('expenselog', ["exp"=>$exp]);
	}
}
?>