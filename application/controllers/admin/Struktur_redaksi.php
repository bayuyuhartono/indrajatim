<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Struktur_redaksi extends CI_Controller 
{
	public function __Construct()
    {
        parent:: __construct();
        $this->load->model('m_admin','admin');
        $this->load->model('m_global','global');
	}

	public function index()
	{
		$struktur = $this->admin->getstrukturredaksi("where id='1' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Struktur Redaksi',
			'id' => (isset($struktur[0]['id'])) ? $struktur[0]['id'] : "",
			'struktur_redaksi' => (isset($struktur[0]['struktur_redaksi'])) ? $struktur[0]['struktur_redaksi'] : "",
		);
		$this->load->view('admin/struktur_redaksi/index', $data);
	}

	public function actionedit()
	{
		$id = $this->input->post('id');
		$struktur_redaksi = $this->input->post('struktur_redaksi');
		$data = array(
			'struktur_redaksi' => $struktur_redaksi,
		);
		$this->global->UpdateData('tbl_struktur_redaksi', $data, array('id' => $id));
		echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/struktur_redaksi';</script>";
	}
}





