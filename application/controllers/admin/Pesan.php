<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Pesan extends CI_Controller 
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
			'subtitle' => 'Pesan',
			'list_pesan' => $this->admin->getpesan()
		);
		$this->load->view('admin/pesan/index', $data);
	}

	public function actionhapus($id)
	{
		$this->global->DeleteData('tbl_pesan', array('id' => $id));
		echo "<script>alert('Berhasil Data Dihapus');window.location='".base_url()."admin/pesan';</script>";
	}
}





