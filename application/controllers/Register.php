<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Register extends CI_Controller 
{
	public function __Construct()
	{
		parent::__construct();
		$this->load->model('m_global','global');
	}

	public function index()
	{

		$valid = $this->form_validation;
		$valid->set_rules('email','Email','required|is_unique[tbl_users.email]',
		array(	'is_unique' => 'Email <strong>'.
				$this->input->post('email'). '</strong>. sudah terdaftar. Silahkan menggunakan email baru!'));

		$valid->set_rules('nama','Nama','required',
		array('required' => 'Nama harus diisi'));

		$valid->set_rules('password','Password','required',
		array('required' => 'Password harus diisi'));

		$valid->set_rules('confirm_password','Confirm Password','required|matches[password]',
		array( 'matches' => '<strong>Password tidak sesuai. cek password anda kembali</strong>'));

		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$password = sha1($this->input->post('password'));

		if ($valid->run()  == FALSE)
		{
			$data = array(
				'title' => 'INDRA JATIM',
				'subtitle' => 'Register Account'
			);
			$this->load->view('register', $data);
		}else{
			$data = array(
				'nama' => $nama,
				'email' => $email,
				'password' => $password,
				'status' => '1'
			);
			$this->global->InsertData('tbl_users', $data);
			$this->session->set_flashdata('success', 'Berhasil melakukan pendaftaran');
			redirect(base_url('login'));  
		}	
	}
}
