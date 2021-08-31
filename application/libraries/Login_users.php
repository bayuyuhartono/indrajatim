<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_users
{
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct()
	{
		$this->CI =& get_instance();
	}

	//Login
	public function LoginData($email, $password)
	{
		//query untuk pencocokan data
		$query = $this->CI->db->get_where('tbl_users', array(	'email' => $email,
																'password' => $password,
		));
		//Jika ada hasilnya
		if ($query->num_rows() > 0)
		{
			$row 			= $this->CI->db->query('SELECT * FROM tbl_users WHERE email = "'.$email.'" AND password = "'.$password.'" ');
			$users 			= $row->row();
			$id 			= $users->id;
			$nama 			= $users->nama;
			$email			= $users->email;
			$status 		= $users->status;
			$this->CI->session->set_userdata('email', $email);
			$this->CI->session->set_userdata('status', $status);
			$this->CI->session->set_userdata('nama', $nama);
			$this->CI->session->set_userdata('id', $id);
			foreach ($query->result() as $row)
			{
				if ($row->status == "1")
				{
					redirect(base_url('home'));
			}else{
					$this->CI->session->set_flashdata('failed', 'Username dan Password Tidak Aktif');
					redirect(base_url().'login');
				}	
			}
		}else{
			$this->CI->session->set_flashdata('failed', 'Login Gagal, Harap Periksa Kembali Akun Anda');
			redirect(base_url().'login');
		}
	}
	
	//Cek login
	public function cek_login()
	{
		if ($this->CI->session->userdata('nama') == '')
		{
			$this->CI->session->set_flashdata('failed', 'silakan login dulu');
			redirect(base_url('login'));
		}
	}
	//Logout
	public function logout()
	{
		$this->CI->session->unset_userdata('nama');
		// $this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		$this->CI->session->set_flashdata('success','Anda berhasil logout');
		redirect(base_url().'login');
	}
}
?>