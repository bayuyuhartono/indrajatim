<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller 
{
	public function __Construct()
    {
        parent:: __construct();
        $this->load->model('m_admin','admin');
        $this->load->model('m_global','global');
	}

	public function index()
	{
		$contact = $this->admin->getcontact("where id='1' ");
		$socmed = $this->admin->getsocmed("where id='1' ");
		$socmed_dua = $this->admin->getsocmed("where id='2' ");
		$socmed_tiga = $this->admin->getsocmed("where id='3' ");
		$socmed_empat = $this->admin->getsocmed("where id='4' ");
		$socmed_lima = $this->admin->getsocmed("where id='5' ");
		$data = array(
			'title' => 'INDRA JATIM',
			'subtitle' => 'INDRA JATIM',
			'kategori' => $this->admin->getkategori(),
			'gambar' => (isset($slide[0]['gambar'])) ? $slide[0]['gambar'] : "",
			'list_berita' => $this->admin->getberita("where tanggal <= NOW() order by tanggal DESC LIMIT 3 "),
			'list_hariini' => $this->admin->getberita("where tanggal <= NOW() order by tanggal DESC LIMIT 6 "),
			'no_telp' => (isset($contact[0]['no_telp'])) ? $contact[0]['no_telp'] : "",
			'email' => (isset($contact[0]['email'])) ? $contact[0]['email'] : "",
			'alamat' => (isset($contact[0]['alamat'])) ? $contact[0]['alamat'] : "",
			'socmed_satu' => (isset($socmed[0]['link'])) ? $socmed[0]['link'] : "",
			'socmed_dua' => (isset($socmed_dua[0]['link'])) ? $socmed_dua[0]['link'] : "",
			'socmed_tiga' => (isset($socmed_tiga[0]['link'])) ? $socmed_tiga[0]['link'] : "",
			'socmed_empat' => (isset($socmed_empat[0]['link'])) ? $socmed_empat[0]['link'] : "",
			'socmed_lima' => (isset($socmed_lima[0]['link'])) ? $socmed_lima[0]['link'] : "",
			'img_socmedsatu' => (isset($socmed[0]['gambar'])) ? $socmed[0]['gambar'] : "",
			'img_socmeddua' => (isset($socmed_dua[0]['gambar'])) ? $socmed_dua[0]['gambar'] : "",
			'img_socmedtiga' => (isset($socmed_tiga[0]['gambar'])) ? $socmed_tiga[0]['gambar'] : "",
			'img_socmedempat' => (isset($socmed_empat[0]['gambar'])) ? $socmed_empat[0]['gambar'] : "",
			'img_socmedlima' => (isset($socmed_lima[0]['gambar'])) ? $socmed_lima[0]['gambar'] : "",
			'list_slide' => $this->admin->getberita("where tanggal <= NOW() AND slide='1' order by tanggal DESC limit 3 "),
			'kategori_name' => 'home',
			'image_banneratas' => $this->admin->getbanner("where posisi='Atas' and status='1' "),
			'image_bannerkanan' => $this->admin->getbanner("where posisi='Kanan' and status='1' "),
			'image_bannerbawah' => $this->admin->getbanner("where posisi='Bawah' and status='1' "),
			'berita_hits' => $this->admin->getberita("order by count_hits DESC LIMIT 4 "),
		);
		$this->load->view('template/dashboard', $data);
	} 

	public function pesan()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$phone = $this->input->post('phone');
		$message = $this->input->post('message');
		$data = array(
			'username' => $username,
			'email' => $email,
			'phone' => $phone,
			'message' => $message,
		);
		$this->global->InsertData('tbl_pesan', $data);
	}
}









