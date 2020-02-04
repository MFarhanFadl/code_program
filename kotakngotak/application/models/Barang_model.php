<?php

class Barang_model extends CI_model {
	public function getallStorage()
	{
		return $this->db->get('penyimpanan')->result_array();
	}

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

	public function getallTransaksi2()
	{
		return $this->db->get('transaksi2')->result_array();
	}

	public function tambahDataBrng()
	{
		$data = [
			"nama_barang" => $this->input->post('barang', true),
	        "deskripsi" => $this->input->post('deskripsi', true)
		];

		$this->db->insert('barang', $data);
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

	public function tambahDataTrnsksi2()
	{
		$data = [
			"id_kostumer" => $this->input->post('perusahaan', true),
	        "id_barang" => $this->input->post('barang', true),
	        "jumlah" => $this->input->post('jumlah', true),
	        "status" => $this->input->post('status', true)
		];

		$this->db->insert('transaksi2', $data);
	}

	public function hapusDataBrng($no)
	{
		$this->db->where('id_barang',$no);	//bisajuga gini
		$this->db->delete('barang');		//di bikin satu-satu funssinya
	}

	public function hapusDataTransaksi($no)
	{
		$this->db->where('id_transaksi',$no);	//bisajuga gini
		$this->db->delete('transaksi');		//di bikin satu-satu funssinya
	}

	public function getDetailbyNo($no)
	{
		return $this->db->get_where('barang', ['id_barang' => $no])->row_array(); //bisa bikin fungsinya kek gini digabungin
	}

	public function getDetailKostumerbyNo($no)
	{
		return $this->db->get_where('kostumer', ['id_kostumer' => $no])->row_array(); //bisa bikin fungsinya kek gini digabungin
	}

	public function getDetailTransaksibyNo($no)
	{
		return $this->db->get_where('transaksi', ['id_transaksi' => $no])->row_array(); //bisa bikin fungsinya kek gini digabungin
	}



	public function editTransaksi()
	{
		$data = [
			"id_kostumer" => $this->input->post('perusahaan', true),
	        "id_barang" => $this->input->post('barang', true),
	        "jumlah" => $this->input->post('jumlah', true),
	        "status" => $this->input->post('status', true)
		];

		$this->db->where('id_transaksi', $this->input->post('di'));
		$this->db->update('transaksi', $data);
	}

	public function cariBarang()
	{
		$keyword = $this->input->post('cari', true);
		$this->db->like('nama_barang', $keyword);
		return $this->db->get('barang')->result_array();
	}


}