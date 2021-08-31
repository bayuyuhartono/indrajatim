<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Socmed extends CI_Controller 
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
			'subtitle' => 'socmed',
			'list_contact' => $this->admin->getsocmed()
		);
		$this->load->view('admin/socmed/index', $data);
	}

	public function edit_data($id='')
	{
		$socmed = $this->admin->getsocmed("where id='$id' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Edit socmed',
			'id' => (isset($socmed[0]['id'])) ? $socmed[0]['id'] : "",
			'link' => (isset($socmed[0]['link'])) ? $socmed[0]['link'] : "",
		);
		$this->load->view('admin/socmed/edit_data', $data);
	}

	public function actionedit()
	{
		$old_name	= $_FILES["gambar"]["name"];
		$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
		$new_name	= time().'.'.$ext;
		$config = array(
			'upload_path' 		=> './assets/admin/upload/socmed/',
			'allowed_types' 	=> 'jpg|png|jpeg',
			'file_name'			=> $new_name,
			'image_library'		=> 'gd2',
			'source_image'		=> './assets/admin/upload/socmed/'.$new_name,
			'create_thumb'		=> true,
			'maintain_ratio'	=> true,
			'thumb_marker'     	=> '',	
		);
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload('gambar')) 
		{
			$id_socmed = $this->input->post('id');
			$data = array(
				'link'  			=> $this->input->post('link'),
			);
			$id = $this->db->where('id', $id_socmed);
			$query = $this->db->get('tbl_socmed');
			$row = $query->row();
			$this->global->UpdateData('tbl_socmed', $data, array('id' => $id_socmed));
			echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/socmed';</script>";
		}else{
			$upload_data   = array('uploads' => $this->upload->data());				  
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$id_socmed = $this->input->post('id');
			$data = array(
				'link'  			=> $this->input->post('link'),
				'gambar'   			=> $new_name,
			);
			$id = $this->db->where('id', $id_socmed);
			$query = $this->db->get('tbl_socmed');
			$row = $query->row();
			unlink("./assets/admin/upload/socmed/$row->gambar");
			$this->global->UpdateData('tbl_socmed', $data, array('id' => $id_socmed));
		} 
		echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/socmed';</script>";

	}
}


