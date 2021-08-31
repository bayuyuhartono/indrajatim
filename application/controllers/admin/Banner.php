<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Banner extends CI_Controller 
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
			'subtitle' => 'Banner',
			'list_banner' => $this->admin->getbanner()
		);
		$this->load->view('admin/banner/index', $data);
	}

	public function edit_data($id_banner = '')
	{
		$banner = $this->admin->getbanner("where id='$id_banner' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Edit Banner',
			'id' => (isset($banner[0]['id'])) ? $banner[0]['id'] : "",
			'judul' => (isset($banner[0]['judul'])) ? $banner[0]['judul'] : "",
		);
		$this->load->view('admin/banner/edit_data', $data);
	}

	public function actionedit()
	{
		$old_name	= $_FILES["gambar"]["name"];
		$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
		$new_name	= time().'.'.$ext;
		$config = array(
			'upload_path' 		=> './assets/admin/upload/banner/',
			'allowed_types' 	=> 'jpg|png|jpeg',
			'file_name'			=> $new_name,
			'image_library'		=> 'gd2',
			'source_image'		=> './assets/admin/upload/banner/'.$new_name,
			'create_thumb'		=> true,
			'maintain_ratio'	=> true,
			'thumb_marker'     	=> '',	
		);
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload('gambar')) 
		{
			$id_banner = $this->input->post('id');
			$data = array(
				'judul'  			=> $this->input->post('judul'),
				'status'  			=> $this->input->post('status'),
			);
			$id = $this->db->where('id', $id_banner);
			$query = $this->db->get('tbl_banner');
			$row = $query->row();
			$this->global->UpdateData('tbl_banner', $data, array('id' => $id_banner));
			echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/banner';</script>";
		}else{
			$upload_data   = array('uploads' => $this->upload->data());				  
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$id_banner = $this->input->post('id');
			$data = array(
				'judul'  			=> $this->input->post('judul'),
				'status'  			=> $this->input->post('status'),
				'gambar'   			=> $new_name,
			);
			$id = $this->db->where('id', $id_banner);
			$query = $this->db->get('tbl_banner');
			$row = $query->row();
			unlink("./assets/admin/upload/banner/$row->gambar");
			$this->global->UpdateData('tbl_banner', $data, array('id' => $id_banner));
		} 
		echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/banner';</script>";
	}
}







