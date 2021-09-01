<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model 
{	
	public function getkategori($where = '')
	{
		return $this->db->query("select * from tbl_kategori $where;")->result_array();
	}

	public function getberita($where = '')
	{
		return $this->db->query("select * from tbl_berita left join tbl_kategori ON tbl_berita.id_kategori=tbl_kategori.id	
		 $where;")->result_array();
	}

	public function getcontact($where = '')
	{
		return $this->db->query("select * from tbl_contact $where;")->result_array();
	}

	public function getsocmed($where = '')
	{
		return $this->db->query("select * from tbl_socmed $where;")->result_array();
	}

	public function getslide($where = '')
	{
		return $this->db->query("select * from tbl_slide $where;")->result_array();
	}

	public function getbanner($where = '')
	{
		return $this->db->query("select * from tbl_banner $where;")->result_array();
	}

	public function getpesan($where = '')
	{
		return $this->db->query("select * from tbl_pesan $where;")->result_array();
	}

	public function gettentangkami($where = '')
	{
		return $this->db->query("select * from tbl_tentang_kami $where;")->result_array();
	}

	public function getstrukturredaksi($where = '')
	{
		return $this->db->query("select * from tbl_struktur_redaksi $where;")->result_array();
	}

	public function getprivacypolicy($where = '')
	{
		return $this->db->query("select * from tbl_privacy_policy $where;")->result_array();
	}

	public function countkomentar($where = '')
	{
		return $this->db->query("select count(berita_id) as jumlah from tbl_komentar $where;")->result_array();
	}

	public function countberita($where = '')
	{
		return $this->db->query("select count(id_berita) as jumlah from tbl_berita $where;")->result_array();
	}

	public function countpesan($where = '')
	{
		return $this->db->query("select count(id) as jumlah from tbl_pesan $where;")->result_array();
	}

	public function countusers($where = '')
	{
		return $this->db->query("select count(id) as jumlah from tbl_users $where;")->result_array();
	}

	public function counthits($id)
	{
		$this->db->set('count_hits', 'count_hits+1', FALSE);
		$this->db->where('id_berita', $id);
		$this->db->update('tbl_berita');
	}

	public function getusers($where = '')
	{
		return $this->db->query("select * from tbl_users $where;")->result_array();
	}

	public function getkomentar($where = '')
	{
		return $this->db->query("select * from tbl_komentar left join tbl_berita ON tbl_komentar.berita_id=tbl_berita.id_berita $where;")->result_array();
	}

	public function getberitaslug($where = '')
	{
		return $this->db->query("select id_berita, judul from tbl_berita left join tbl_kategori ON tbl_berita.id_kategori=tbl_kategori.id	
		 $where;")->result_array();
	}

	public function getberitamore($where = '')
	{
		return $this->db->query("select id_berita, judul, slug, gambar, tanggal from tbl_berita left join tbl_kategori ON tbl_berita.id_kategori=tbl_kategori.id	
		 $where;")->result_array();
	}
}		