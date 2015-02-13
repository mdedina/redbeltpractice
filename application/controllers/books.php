<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Books extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler();
	}

	public function home()
	{
		$this->load->view('books/home');

	}

	public function add_book_review()
	{

	}

	public function book()
	{

	}

	public function add_book_review_post()
	{

	}

	public function book_post()
	{

	}

}