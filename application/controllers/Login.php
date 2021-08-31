<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller 
{	
	public function index()
	{
		//Validasi
		$valid 			= $this->form_validation;
		$email			= $this->input->post('email');
		$password		= sha1($this->input->post('password')); 

		$valid->set_rules('email','Email','required');
		$valid->set_rules('password','Password','required');
		if ($valid->run())
		{
			$this->login_users->LoginData($email,$password);
		}
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Login Indra Jatim'
		);
		$this->load->view('login', $data);
	}

	public function logout()
	{
		$this->login_users->logout();
	}
}



