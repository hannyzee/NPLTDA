<?php 
/**
 * 
 */
class Report extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('report_model');
		$this->session->set_userdata('myname', 'userid');
	}

	public function reporting()
	{
		$reportcode = $this->input->post('rid');
		$report = $this->input->post('report');

		$this->report_model->reports(array(
			$reportcode,
			$report
		));

		redirect('home/dashboard');
	}

	public function reports()
	{
		$this->load->view('report');
	}
}
?>