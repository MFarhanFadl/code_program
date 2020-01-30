<?php

class Barang_model extends CI_model {
	public function getallBarang()
	{
		return $this->db->get('barang')->result_array();
	}

	public function getallKostumer()
	{
		return $this->db->get('kostumer')->result_array();
	}

	public function getallTransaksi()
	{
		return $this->db->get('transaksi')->result_array();
	}

	public function tambahDataBrng()
	{
		$data = [
			"nama_barang" => $this->input->post('barang', true),
	        "jumlah" => $this->input->post('jumlah', true),
	        "deskripsi" => $this->input->post('deskripsi', true)
		];

		$this->db->insert('barang', $data);
	}

	public function tambahDataTrnsksi()
	{
		$data = [
			"id_kostumer" => $this->input->post('perusahaan', true),
	        "id_barang" => $this->input->post('barang', true),
	        "jumlah" => $this->input->post('jumlah', true),
	        "status" => $this->input->post('status', true)
		];

		$this->db->insert('transaksi', $data);
	}

	public function hapusDataBrng($no)
	{
		$this->db->where('id_barang',$no);	//bisajuga gini
		$this->db->delete('barang');		//di bikin satu-satu funssinya
	}

	public function getDetailbyNo($no)
	{
		return $this->db->get_where('barang', ['id_barang' => $no])->row_array(); //bisa bikin fungsinya kek gini digabungin
	}

	public function getDetailKostumerbyNo($no)
	{
		return $this->db->get_where('kostumer', ['id_kostumer' => $no])->row_array(); //bisa bikin fungsinya kek gini digabungin
	}


	public function editDataBrng()
	{
		$data = [
			"nama_barang" => $this->input->post('barang', true),
	        "deskripsi" => $this->input->post('deskripsi', true)
		];

		$this->db->where('id_barang', $this->input->post('di'));
		$this->db->update('barang', $data);
	}

	public function cariBarang()
	{
		$keyword = $this->input->post('cari', true);
		$this->db->like('nama_barang', $keyword);
		return $this->db->get('barang')->result_array();
	}


}