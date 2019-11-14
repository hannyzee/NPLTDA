<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	    $this->load->model('auth_model');
		$this->session->set_userdata('myname', 'userid');
	}


	/**
	 * Processes the login form
	 * @return void
	 */
	public function authentication()
	{
   		$this->load->library('form_validation');

    	$this->form_validation->set_rules('userid', 'Userid', 'required');
    	$this->form_validation->set_rules('pword', 'Pword', 'required');

        if ($this->form_validation->run() == TRUE)
        {
    	$this->load->model('auth_model');
		$username = $this->input->post('userid', true);
		$password = $this->input->post('pword', true);
		$email = $this->input->post('email', true);

		$user = $this->db->query('SELECT * FROM userlogin WHERE email = ? OR userid = ?', [$username, $username],[$email, $email])->row();
		}
		if(password_verify($password, $user->pword)){
			$this->session->set_userdata('userid', $user->userid);
			redirect('home/dashboard');
		}
		else{
			echo "Wrong username or password";
		}
	}


	public function login()
	{
		$this->load->view('login');
	}

/**
	 * Processes the registeration form
	 *
	 * @return void
	 */
	public function register()
	{
		$username = $this->input->post('userid');
		$email = $this->input->post('email');
		$password = $this->input->post('pword');

		$this->auth_model->register_user(array(
			$username,
			$email,
			password_hash($password, PASSWORD_DEFAULT)
		));
			// if sucessfull redirects to
	        redirect('home/dashboard');
	}
	public function sign_up()
	{
		$this->load->view('register');
	}

	public function logout()
	{
		session_destroy();
		redirect('login');
	}
}
