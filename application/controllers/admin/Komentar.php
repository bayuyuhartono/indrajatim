<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class komentar extends CI_Controller 
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
			'subtitle' => 'komentar',
			'list_komentar' => $this->admin->getkomentar()
		);
		$this->load->view('admin/komentar/index', $data);
	}

	public function actionpublish($id)
	{
		$data = array(
			'status' => 1
		);
		$this->global->UpdateData('tbl_komentar', $data, array('id' => $id));
		echo "<script>alert('Berhasil Data Dipublish');window.location='".base_url()."admin/komentar';</script>";
	}

	public function actionunpublish($id)
	{
		$data = array(
			'status' => 0
		);
		$this->global->UpdateData('tbl_komentar', $data, array('id' => $id));
		echo "<script>alert('Berhasil Data Diunpublish');window.location='".base_url()."admin/komentar';</script>";
	}

	public function actionhapus($id)
	{
		$this->global->DeleteData('tbl_komentar', array('id' => $id));
		echo "<script>alert('Berhasil Data Dihapus');window.location='".base_url()."admin/komentar';</script>";
	}
}






