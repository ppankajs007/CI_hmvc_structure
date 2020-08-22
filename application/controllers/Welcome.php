<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		Parent::__construct();
	}

	public function index()
	{
		
		$this->load->view('welcome_message');
	}

	public function error(){
		echo 'slmasc';
		//$this->load->view('errors/cli/error_404');
	}

}
