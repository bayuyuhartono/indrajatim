<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller 
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
			'subtitle' => 'Berita',
			'list_berita' => $this->admin->getberita()
		);
		$this->load->view('admin/berita/index', $data);
	}

	public function tambah_data()
	{
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Tambah Berita',
			'list_kategori' => $this->admin->getkategori()
		);
		$this->load->view('admin/berita/tambah_data', $data);
	}

	public function actiontambah()
	{ 
		$date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
		$jam = $date->format('H:i:s');
		$old_name	= $_FILES["gambar"]["name"];
		$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
		$new_name	= time().'.'.$ext;
		$config = array(
			'upload_path' 		=> './assets/admin/upload/berita/',
			'allowed_types' 	=> 'jpg|png|jpeg',
			'file_name'			=> $new_name,
			'image_library'		=> 'gd2',
			'source_image'		=> './assets/admin/upload/berita/'.$new_name,
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
				'id_kategori'  		=> $this->input->post('kategori'),
				'tanggal'   		=> date($this->input->post('tanggal')).' '.$jam, 
				'tanggal_dibuat'   	=> date('Y-m-d H:i:s').' '.$jam, 
				'content'   		=> $this->input->post('content'),
				'caption'   		=> $this->input->post('caption'),
				'gambar'   			=> $new_name,
			);
			$this->global->InsertData('tbl_berita', $data);
			echo "<script>alert('Berhasil Data Ditambahkan');window.location='".base_url()."admin/berita';</script>";
		}
	}

	public function edit_data($id_berita = '')
	{
		$berita = $this->admin->getberita("where id_berita='$id_berita' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'Edit Berita',
			'id_berita' => (isset($berita[0]['id_berita'])) ? $berita[0]['id_berita'] : "",
			'judul' => (isset($berita[0]['judul'])) ? $berita[0]['judul'] : "",
			'kategori' => (isset($berita[0]['kategori'])) ? $berita[0]['kategori'] : "",
			'tanggal' => (isset($berita[0]['tanggal'])) ? $berita[0]['tanggal'] : "",
			'tanggal_diubah' => date('Y-m-d H:i:s'),
			'content' => (isset($berita[0]['content'])) ? $berita[0]['content'] : "",
			'caption' => (isset($berita[0]['caption'])) ? $berita[0]['caption'] : "",
			'list_kategori' => $this->admin->getkategori()
		);
		$this->load->view('admin/berita/edit_data', $data);
	}

	public function actionedit()
	{
		$date = new DateTime("now", new DateTimeZone('Asia/Jakarta'));
		$jam = $date->format('H:i:s');
		$old_name	= $_FILES["gambar"]["name"];
		$ext 		= pathinfo($old_name, PATHINFO_EXTENSION);
		$new_name	= time().'.'.$ext;
		$config = array(
			'upload_path' 		=> './assets/admin/upload/berita/',
			'allowed_types' 	=> 'jpg|png|jpeg',
			'file_name'			=> $new_name,
			'image_library'		=> 'gd2',
			'source_image'		=> './assets/admin/upload/berita/'.$new_name,
			'create_thumb'		=> true,
			'maintain_ratio'	=> true,
			'thumb_marker'     	=> '',	
		);
		$this->load->library('upload', $config);
		if (! $this->upload->do_upload('gambar')) 
		{
			$id_berita = $this->input->post('id_berita');
			$data = array(
				'judul'  			=> $this->input->post('judul'),
				'id_kategori'  		=> $this->input->post('kategori'),
				'content'  	 		=> $this->input->post('content'),
				'caption'  	 		=> $this->input->post('caption'),
				'tanggal'   		=> date('Y-m-d', strtotime($this->input->post('tanggal'))).' '.$jam,
				'tanggal_diubah'   		=> date('Y-m-d H:i:s').' '.$jam,
			);
			$id = $this->db->where('id_berita', $id_berita);
			$query = $this->db->get('tbl_berita');
			$row = $query->row();
			$this->global->UpdateData('tbl_berita', $data, array('id_berita' => $id_berita));
			echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/berita';</script>";
		}else{
			$upload_data   = array('uploads' => $this->upload->data());				  
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();
			$id_berita = $this->input->post('id_berita');
			$data = array(
				'judul'  		=> $this->input->post('judul'),
				'id_kategori'  		=> $this->input->post('kategori'),
				'content'  	 		=> $this->input->post('content'),
				'caption'  	 		=> $this->input->post('caption'),
				'tanggal'   		=> date('Y-m-d', strtotime($this->input->post('tanggal'))).' '.$jam,
				'tanggal_diubah'   		=> date('Y-m-d H:i:s').' '.$jam,
				'gambar'   			=> $new_name,
			);
			$id = $this->db->where('id_berita', $id_berita);
			$query = $this->db->get('tbl_berita');
			$row = $query->row();
			unlink("./assets/admin/upload/berita/$row->gambar");
			$this->global->UpdateData('tbl_berita', $data, array('id_berita' => $id_berita));
		} 
		echo "<script>alert('Berhasil Data Diedit');window.location='".base_url()."admin/berita';</script>";
	}

	public function actiondelete($id_berita)
	{
	    $id = $this->db->where('id_berita', $id_berita);
	    $query = $this->db->get('tbl_berita');
	    $row = $query->row();
	    unlink("./assets/admin/upload/berita/$row->gambar");
	    $this->global->DeleteData('tbl_berita', array('id_berita' => $id_berita));
	    $this->global->DeleteData('tbl_komentar', array('id_berita' => $id_berita));
		echo "<script>alert('Berhasil Data Dihapus');window.location='".base_url()."admin/berita';</script>";
	} 
}







