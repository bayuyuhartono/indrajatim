<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Privacy_policy extends CI_Controller 
{
	public function __Construct()
    {
        parent:: __construct();
        $this->load->model('m_admin','admin');
        $this->load->model('m_global','global');
	}

	public function index()
	{
		$privacy_policy = $this->admin->getprivacypolicy("where id='1' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Privacy Policy',
			'id' => (isset($privacy_policy[0]['id'])) ? $privacy_policy[0]['id'] : "",
			'privacy_policy' => (isset($privacy_policy[0]['privacy_policy'])) ? $privacy_policy[0]['privacy_policy'] : "",
		);
		$this->load->view('admin/privacy_policy/index', $data);
	}

	public function actionedit()
	{
		$id = $this->input->post('id');
		$privacy_policy = $this->input->post('privacy_policy');
		$data = array(
			'privacy_policy' => $privacy_policy,
		);
		$this->global->UpdateData('tbl_privacy_policy', $data, array('id' => $id));
		echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/privacy_policy';</script>";
	}
}





