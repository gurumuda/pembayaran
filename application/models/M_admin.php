<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	function data_instansi()
	{
		return $this->db->get('tbl_instansi')->row_array();
	}

	function data_kelas()
	{
		return $this->db->get('tbl_kelas');
	}

	function jumlah_siswa()
	{
		return $this->db->get('tbl_siswa')->num_rows();
	}

	function data_siswa()
	{
		$siswa = $this->db->select('*, tbl_siswa.id_ as ids, tbl_siswa.kode_kelas as kode')
				->order_by('kode', 'asc')
				->order_by('nama', 'asc')
				->join('tbl_kelas', 'tbl_kelas.kode_kelas = tbl_siswa.kode_kelas', 'left')
				->get('tbl_siswa');

		return $siswa;
	}

	function biaya1()
	{
		return $this->db->get_where('tbl_biaya', ['kategori' => '1']);
	}

	function biaya2()
	{
		return $this->db->get_where('tbl_biaya', ['kategori' => '2']);
	}

	function biaya3()
	{
		return $this->db->get_where('tbl_biaya', ['kategori' => '3']);
	}

	function simpan_spp($data)
	{
		$simpan = $this->db->insert('tbl_pembayaran', $data);
		if ($simpan) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	function jenis_biaya()
	{	
			$this->db->group_by('jenis');
		return $this->db->get('tbl_biaya')->result();
	}

	function jenis_pembayaran()
	{	
			$this->db->group_by('jenis');
		return $this->db->get('tbl_biaya')->num_rows();
	}

	function jum_uang()
	{
		$j = $this->db->get('tbl_pembayaran')->result_array();
		$jl = array();
		foreach ($j as $key) {
			array_push($jl, $key['jumlah']);
		}
		$jlm = array_sum($jl);
		return $jlm;
	}

}

/* End of file M_admin.php */
/* Location: ./application/models/M_admin.php */