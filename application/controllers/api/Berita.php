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

	public function getMoreData($offset)
	{
        $offset = intval($offset);
        $dataCount = $this->admin->getberita("");
		$getDataBerita = $this->admin->getberitamore("where tanggal <= NOW() order by tanggal DESC limit 12 OFFSET $offset ");
        $result = [];
		$result['data'] = $getDataBerita;
        if (count($dataCount) <= $offset) {
            $result['next'] = 0;
        } else {
            $result['next'] = $offset + count($getDataBerita);
        }
		echo json_encode($result);
        return;
	}
}	



