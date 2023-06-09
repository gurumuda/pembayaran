<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hapus extends CI_Controller {

	function semuaKelas()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$pass = $this->input->post('pass', TRUE);

		$data = $this->db->get_where('tbl_pengguna', ['xUser' => $this->session->userdata('username')])->row_array();

		if (password_verify($pass, $data['xPass'])) {
			$this->db->truncate('tbl_kelas');
			$this->session->set_flashdata('success', 'Data kelas berhasil dihapus');
			redirect('admin/kelas','refresh');
		} else {
			$this->session->set_flashdata('error', 'Password tidak cocok');
			redirect('admin/kelas','refresh');
		}
	}

	function kelas($id_)
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$this->db->where('id_', $id_);
		$hapus = $this->db->delete('tbl_kelas');

		if ($hapus) {
			$this->session->set_flashdata('success', 'Data kelas berhasil dihapus');
			redirect('admin/kelas','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data kelas berhasil dihapus');
			redirect('admin/kelas','refresh');
		}
		

	}

	function semuaSiswa()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$pass = $this->input->post('pass', TRUE);

		$data = $this->db->get_where('tbl_pengguna', ['xUser' => $this->session->userdata('username')])->row_array();

		if (password_verify($pass, $data['xPass'])) {
			$this->db->truncate('tbl_siswa');
			$this->session->set_flashdata('success', 'Data siswa berhasil dihapus');
			redirect('admin/siswa','refresh');
		} else {
			$this->session->set_flashdata('error', 'Password tidak cocok');
			redirect('admin/siswa','refresh');
		}
	}

	function siswa($id_)
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$this->db->where('id_', $id_);
		$hapus = $this->db->delete('tbl_siswa');

		if ($hapus) {
			$this->session->set_flashdata('success', 'Data siswa berhasil dihapus');
			redirect('admin/siswa','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data siswa berhasil dihapus');
			redirect('admin/siswa','refresh');
		}
		

	}

	function semuaBiaya($kategori)
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$pass = $this->input->post('pass', TRUE);

		$data = $this->db->get_where('tbl_pengguna', ['xUser' => $this->session->userdata('username')])->row_array();

		if (password_verify($pass, $data['xPass'])) {
			$this->db->where('kategori', $kategori);
			$hapus = $this->db->delete('tbl_biaya');

			if ($hapus) {
				$this->session->set_flashdata('success', 'Data biaya berhasil dihapus');
				redirect('admin/biaya','refresh');
			} else {
				$this->session->set_flashdata('error', 'Data biaya berhasil dihapus');
				redirect('admin/biaya','refresh');
			}

		} else {
			$this->session->set_flashdata('error', 'Password tidak cocok');
			redirect('admin/biaya','refresh');
		}
	}

	function biaya($id_)
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$this->db->where('id_', $id_);
		$hapus = $this->db->delete('tbl_biaya');

		if ($hapus) {
			$this->session->set_flashdata('success', 'Data biaya berhasil dihapus');
			redirect('admin/biaya','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data biaya berhasil dihapus');
			redirect('admin/biaya','refresh');
		}
		

	}


}

/* End of file Hapus.php */
/* Location: ./application/controllers/Hapus.php */