<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Slide extends CI_Controller 
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
			'subtitle' => 'Slide',
			'list_slide' => $this->admin->getslide()
		);
		$this->load->view('admin/slide/index', $data);
	}

	public function tambah_data()
	{
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Tambah Slide',
		);
		$this->load->view('admin/slide/tambah_data', $data);
	}

	public function actiontambah()
	{ 
		$old_name	= $_FILES["gambar"]["name"];
		$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
		$new_name	= time().'.'.$ext;
		$config = array(
			'upload_path' 		=> './assets/admin/upload/slide/',
			'allowed_types' 	=> 'jpg|png|jpeg',
			'file_name'			=> $new_name,
			'image_library'		=> 'gd2',
			'source_image'		=> './assets/admin/upload/slide/'.$new_name,
			'create_thumb'		=> true,
			'maintain_ratio'	=> true,
			'thumb_marker'     	=> '',	
		);
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload('gambar')) {

		}else{
			$upload_data         = array('uploads' => $this->upload->data());
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$data = array(
				'judul'  			=> $this->input->post('judul'),
				'sub_judul'  		=> $this->input->post('sub_judul'),
				'kategori'  		=> $this->input->post('kategori'),
				'gambar'   			=> $new_name,
			);
			$this->global->InsertData('tbl_slide', $data);
			echo "<script>alert('Berhasil Data Ditambahkan');window.location='".base_url()."admin/slide';</script>";
		}
	}

	public function edit_data($id_slide = '')
	{
		$slide = $this->admin->getslide("where id='$id_slide' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Edit Slide',
			'id' => (isset($slide[0]['id'])) ? $slide[0]['id'] : "",
			'judul' => (isset($slide[0]['judul'])) ? $slide[0]['judul'] : "",
			'sub_judul' => (isset($slide[0]['sub_judul'])) ? $slide[0]['sub_judul'] : "",
		);
		$this->load->view('admin/slide/edit_data', $data);
	}

	public function actionedit()
	{
		$old_name	= $_FILES["gambar"]["name"];
		$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
		$new_name	= time().'.'.$ext;
		$config = array(
			'upload_path' 		=> './assets/admin/upload/slide/',
			'allowed_types' 	=> 'jpg|png|jpeg',
			'file_name'			=> $new_name,
			'image_library'		=> 'gd2',
			'source_image'		=> './assets/admin/upload/slide/'.$new_name,
			'create_thumb'		=> true,
			'maintain_ratio'	=> true,
			'thumb_marker'     	=> '',	
		);
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload('gambar')) 
		{
			$id_slide = $this->input->post('id');
			$data = array(
				'judul'  			=> $this->input->post('judul'),
				'sub_judul'  		=> $this->input->post('sub_judul'),
				'kategori'  		=> $this->input->post('kategori'),
			);
			$id = $this->db->where('id', $id_slide);
			$query = $this->db->get('tbl_slide');
			$row = $query->row();
			$this->global->UpdateData('tbl_slide', $data, array('id' => $id_slide));
			echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/slide';</script>";
		}else{
			$upload_data   = array('uploads' => $this->upload->data());				  
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$id_slide = $this->input->post('id');
			$data = array(
				'judul'  			=> $this->input->post('judul'),
				'sub_judul'  		=> $this->input->post('sub_judul'),
				'kategori'  		=> $this->input->post('kategori'),
				'gambar'   			=> $new_name,
			);
			$id = $this->db->where('id', $id_slide);
			$query = $this->db->get('tbl_slide');
			$row = $query->row();
			unlink("./assets/admin/upload/slide/$row->gambar");
			$this->global->UpdateData('tbl_slide', $data, array('id' => $id_slide));
		} 
		echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/slide';</script>";
	}

	public function actiondelete($id_slide)
	{
	    $id = $this->db->where('id', $id_slide);
	    $query = $this->db->get('tbl_slide');
	    $row = $query->row();
	    unlink("./assets/admin/upload/slide/$row->gambar");
	    $this->global->DeleteData('tbl_slide', array('id' => $id_slide));
		echo "<script>alert('Berhasil Data Dihapus');window.location='".base_url()."admin/slide';</script>"; 
	}
}







