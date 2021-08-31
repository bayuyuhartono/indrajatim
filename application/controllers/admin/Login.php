<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller 
{	
	public function index()
	{
		//Validasi
		$valid 			= $this->form_validation;
		$username		= $this->input->post('username');
		$password		= sha1($this->input->post('password'));  

		$valid->set_rules('username','Username','required');
		$valid->set_rules('password','Password','required');
		if ($valid->run())
		{
			$this->login_admin->LoginData($username,$password);
		}
		$data = array(
			'title' => 'INDRA JATIM',
		);
		$this->load->view('admin/login', $data);
	}

	public function logout()
	{
		$this->login_admin->logout();
	}
}



