<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Users extends CI_Controller 
{
	public function __Construct()
    {
        parent:: __construct();
        $this->load->model('m_admin','admin');
        $this->load->model('m_global','global');
	}

	public function index()
	{
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Users',
			'list_users' => $this->admin->getusers()
		);
		$this->load->view('admin/users/index', $data);
	}

	public function actionaktif($id)
	{
		$data = array(
			'status' => 1
		);
		$this->global->UpdateData('tbl_users', $data, array('id' => $id));
		echo "<script>alert('Users Aktif');window.location='".base_url()."admin/users';</script>";
	}

	public function actiontidakaktif($id)
	{
		$data = array(
			'status' => 0
		);
		$this->global->UpdateData('tbl_users', $data, array('id' => $id));
		echo "<script>alert('Users Tidak Aktif');window.location='".base_url()."admin/users';</script>";
	}
}





