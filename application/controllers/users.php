<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model("user");
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
		$result = $this->user->retrieve($this->input->post());
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

	}

	
}

//end of main controller