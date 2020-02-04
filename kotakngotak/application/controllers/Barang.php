<?php

class Barang extends CI_Controller {
	public function __construct() #pake contruck function untuk meload database di controler ini
	{
		parent::__construct();
		$this->load->model('Barang_model');
		$this->load->library('form_validation');

	}

	public function index()
	{
		#$this->load->database(); gunakan jika hanya butuh load database di function ini

		#$this->load->model('Barang_model'); gunakan jika hanya butuh load model di fuction ini
		$jdl['judul'] = 'Riwayat Transaksi';
		$data['transaksi'] = $this->Barang_model->getallTransaksi();
		$data['transaksi2'] = $this->Barang_model->getallTransaksi2();
		$data['kostumer'] = $this->Barang_model->getallKostumer();
		$data['barang'] = $this->Barang_model->getAllBarang();

		if ($this->input->post('cari')) 
		{
			$data['barang'] = $this->Barang_model->cariBarang();
		}
		$this->load->view('template/header', $jdl);
		$this->load->view('barang/index', $data);
		$this->load->view('template/footer');
	}

	public function tambah()
	{
		$jdl['judul'] = 'Formulir Tambah Barang';
		$data['kostumer'] = $this->Barang_model->getallKostumer();
		$data['barang'] = $this->Barang_model->getAllBarang();

		$this->form_validation->set_rules('perusahaan', 'Perusahaan', 'required');
		$this->form_validation->set_rules('barang', 'Barang', 'required');
		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric|max_length[12]');

		if($this->form_validation->run() == FALSE ){
		$this->load->view('template/header', $jdl);
		$this->load->view('barang/tambah',$data);
		$this->load->view('template/footer');
		} else {

			$this->Barang_model->tambahDataTrnsksi();
			$this->session->set_flashdata('data', 'Ditambah');
			redirect('barang');
		}


	}

	public function ambil()
	{
		$jdl['judul'] = 'Formulir Tambah Barang';
		$data['kostumer'] = $this->Barang_model->getallKostumer();
		$data['barang'] = $this->Barang_model->getAllBarang();

		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric|max_length[12]');

		if($this->form_validation->run() == FALSE ){
		$this->load->view('template/header', $jdl);
		$this->load->view('barang/ambil',$data);
		$this->load->view('template/footer');
		} else {

			$this->Barang_model->tambahDataTrnsksi2();
			$this->session->set_flashdata('data', 'Diambil');
			redirect('barang');
		}


	}

	public function hapus($no)
	{
		$this->Barang_model->hapusDataTransaksi($no);
		$this->session->set_flashdata('data', 'Terhapus');
		redirect('barang');

	}

	public function detail($no)
	{
		$jdl['judul'] = 'Data barang';
		$data['barang'] = $this->Barang_model->getDetailbyNo($no);
		$this->load->view('template/header', $jdl);
		$this->load->view('barang/detail', $data);
		$this->load->view('template/footer');
	}

	public function edit($no)
	{
		$jdl['judul'] = 'Formulir Edit Data';
		$data['transaksi'] = $this->Barang_model->getDetailTransaksibyNo($no);
		$data['kostumer'] = $this->Barang_model->getallKostumer();
		$data['barang'] = $this->Barang_model->getAllBarang();
		$data['status'] = ['inbound', 'outbound'];


		$this->form_validation->set_rules('jumlah', 'Jumlah', 'required|numeric|max_length[12]');

		if($this->form_validation->run() == FALSE ){
		$this->load->view('template/header', $jdl);
		$this->load->view('barang/edit', $data);
		$this->load->view('template/footer');
		} else {

			$this->Barang_model->editTransaksi();
			$this->session->set_flashdata('data', 'Diedit');
			redirect('barang');
		}


	}


}