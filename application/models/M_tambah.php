<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tambah extends CI_Model {

	function kelas($data)
	{
		$tambah = $this->db->insert('tbl_kelas', $data);
		if ($tambah) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	function siswa($data)
	{
		$tambah = $this->db->insert('tbl_siswa', $data);
		if ($tambah) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	function biaya($data)
	{
		$tambah = $this->db->insert('tbl_biaya', $data);
		if ($tambah) {
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

	function bayarNon($data)
	{
		$simpan = $this->db->insert_batch('tbl_pembayaran', $data);
		
		if ($simpan) {
			$this->db->where('jumlah', '');
			$this->db->delete('tbl_pembayaran');
			return TRUE;
		} else {
			return FALSE;
		}
		
	}

}

/* End of file M_tambah.php */
/* Location: ./application/models/M_tambah.php */