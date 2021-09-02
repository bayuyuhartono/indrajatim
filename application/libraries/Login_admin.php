<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class Login_admin
{
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	//Login
	public function LoginData($username, $password)
	{
		//query untuk pencocokan data
		$query = $this->CI->db->get_where('tbl_admin', array(	'username' => $username,
		));

		//Jika ada hasilnya
		if ($query->num_rows() > 0)
		{
			$row 			= $this->CI->db->query('SELECT * FROM tbl_admin WHERE username = "'.$username.'" ');
			$admin 			= $row->row();
			$id 			= $admin->id;
			$username 		= $admin->username;
			$name			= $admin->name;
			$status 		= $admin->status;

			$this->CI->session->set_userdata('name', $name);
			$this->CI->session->set_userdata('status', $status);
			$this->CI->session->set_userdata('username', $username);
			$this->CI->session->set_userdata('id', $id);

			foreach ($query->result() as $row)
			{
				if ($row->status == "1")
				{
					redirect(base_url('admin/dashboard'));
			}else{
					$this->CI->session->set_flashdata('success', 'Username dan Password Tidak Aktif');
					redirect(base_url().'admin/login');
				}	
			}
		}else{
			$this->CI->session->set_flashdata('success', 'Login Gagal, Harap Periksa Kembali Akun Anda');
			redirect(base_url().'admin/login');
		}
	}

	//Cek login
	public function cek_login()
	{
		if ($this->CI->session->userdata('username') == '')
		{
			$this->CI->session->set_flashdata('success', 'silakan login dulu');
			redirect(base_url('admin/login'));
		}
	}

	//Logout
	public function logout()
	{
		$this->CI->session->unset_userdata('username');
		// $this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('success','Anda berhasil logout');
		redirect(base_url().'admin/login');
	}
}

?>