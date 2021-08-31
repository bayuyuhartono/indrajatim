<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller 
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
			'subtitle' => 'Contact',
			'list_contact' => $this->admin->getcontact()
		);
		$this->load->view('admin/contact/index', $data);
	}

	public function edit_data($id='')
	{
		$contact = $this->admin->getcontact("where id='$id' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Edit Contact',
			'id' => (isset($contact[0]['id'])) ? $contact[0]['id'] : "",
			'no_telp' => (isset($contact[0]['no_telp'])) ? $contact[0]['no_telp'] : "",
			'email' => (isset($contact[0]['email'])) ? $contact[0]['email'] : "",
			'alamat' => (isset($contact[0]['alamat'])) ? $contact[0]['alamat'] : "",
		);
		$this->load->view('admin/contact/edit_data', $data);
	}

	public function actionedit()
	{
		$id = $this->input->post('id');
		$no_telp = $this->input->post('no_telp');
		$email = $this->input->post('email');
		$alamat = $this->input->post('alamat');
		$data = array(
			'no_telp' => $no_telp,
			'email' => $email,
			'alamat' => $alamat,
		);
		$this->global->UpdateData('tbl_contact', $data, array('id' => $id));
		echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/contact';</script>";
	}
}





