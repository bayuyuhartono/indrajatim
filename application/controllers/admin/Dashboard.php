<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller 
{
	public function __Construct()
    {
        parent:: __construct();
        $this->load->model('m_admin','admin');
	}

	public function index()
	{
		$data = array(
			'title' => 'INDRA JATIM',
			'berita' => $this->admin->countberita(),
			'komentar' => $this->admin->countkomentar(),
			'pesan' => $this->admin->countpesan(),
			'users' => $this->admin->countusers(),
			'list_user' => $this->admin->getusers()
		);
		$this->load->view('admin/template/dashboard', $data);
	}
}



