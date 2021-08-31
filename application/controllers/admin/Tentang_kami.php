<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Tentang_kami extends CI_Controller 
{
	public function __Construct()
    {
        parent:: __construct();
        $this->load->model('m_admin','admin');
        $this->load->model('m_global','global');
	}

	public function index()
	{
		$tentangkami = $this->admin->gettentangkami("where id='1' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Tentang Kami',
			'id' => (isset($tentangkami[0]['id'])) ? $tentangkami[0]['id'] : "",
			'tentang_kami' => (isset($tentangkami[0]['tentang_kami'])) ? $tentangkami[0]['tentang_kami'] : "",
		);
		$this->load->view('admin/tentang_kami/index', $data);
	}

	public function actionedit()
	{
		$id = $this->input->post('id');
		$tentang_kami = $this->input->post('tentang_kami');
		$data = array(
			'tentang_kami' => $tentang_kami,
		);
		$this->global->UpdateData('tbl_tentang_kami', $data, array('id' => $id));
		echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/tentang_kami';</script>";
	}
}





