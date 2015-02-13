<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("User");
		$this->output->enable_profiler();
	}

	// // FOR TEST -- WILL BE REMOVED
	// public function index()
	// {
		
	// 	$this->load->view("book/book");
	// }

	public function login_registration()
	{
		$this->load->view("users/login_registration");
	}

	public function user($id)
	{
		//TODO get user data from model
		$this->load->view("users/user");
	}


	public function login_post()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
		if($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('login_error', TRUE);
			redirect("/users/login_registration");
		}

		$result = $this->User->retrieve($this->input->post());
		if (count($result) == 1) {
			$this->session->set_userdata('user_id', $result[0]['id']);
			$this->session->set_userdata('user_alias', $result[0]['alias']);
			redirect("/books/home");
		}
		else {
			$this->session->set_flashdata('login_error', TRUE);
			redirect("/users/login_registration");
		}

	}

	// there's no post data -- just log out the current user
	public function logout_post()
	{
		$this->session->sess_destroy();
		redirect("/users/login_registration");
	}

	public function registration_post()
	{
		$this->form_validation->set_rules('alias', 'Alias', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[passconf]|md5');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		if($this->form_validation->run() === FALSE) {
			$this->session->set_flashdata('validation_errors', validation_errors());
			redirect("/users/login_registration");
		}

		// check that email isn't in use
		$result = $this->User->retrieve_by_email($this->input->post());
		if (count($result) > 0) {
			$this->session->set_flashdata('email_in_use', TRUE);
			redirect("/users/login_registration");
		}
		$this->User->create($this->input->post());
		$this->session->set_flashdata('registration_success', TRUE);
		redirect("/users/login_registration");
	}
	
}

//end of main controller