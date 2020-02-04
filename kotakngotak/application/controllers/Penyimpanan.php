<?php

class Penyimpanan extends CI_Controller {
	public function __construct() #pake contruck function untuk meload database di controler ini
	{
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$jdl['judul'] = 'Storage';
		$data['penyimpanan'] = $this->Barang_model->getallStorage();
		$this->load->view('template/header', $jdl);
		$this->load->view('penyimpanan/index', $data);
		$this->load->view('template/footer');
	}



}