<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ubah extends CI_Controller {

	function instansi()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}
		$id_ = '10';
		$nama_instansi = $this->input->post('nama_instansi', TRUE);
		$id_instansi = $this->input->post('id_instansi', TRUE);
		$alamat = $this->input->post('alamat', TRUE);
		$email = $this->input->post('email', TRUE);
		$url = $this->input->post('url', TRUE);
		$tlp = $this->input->post('tlp', TRUE);
		$tp = $this->input->post('tp', TRUE);

		$data = [
			'nama' => $nama_instansi,
			'npsn' => $id_instansi,
			'alamat' => $alamat,
			'email' => $email,
			'site' => $url,
			'telepon' => $tlp,
			'th_pelajaran' => $tp,
		];

		$ubah = $this->m_ubah->instansi($data,$id_);

		if ($ubah) {
			$this->session->set_flashdata('success', 'Data instansi berhasil diubah');
			redirect('admin/instansi','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data instansi gagal diubah');
			redirect('admin/instansi','refresh');
		}
	}

	function logo()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$upload = $this->m_ubah->logo();

		if ($upload == 'sukses') {
			$this->session->set_flashdata('success', 'Logo instansi berhasil diubah');
			redirect('admin/instansi','refresh');
		} else {
			$this->session->set_flashdata('error', $this->upload->display_errors());
			redirect('admin/instansi','refresh');
		}

	}

	function kelasSiswa()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		//error_reporting(0);
		$kode_kelas = $this->input->post('kodeKelas');
		$id = $this->input->post('check');

		$data = ['kode_kelas' => $kode_kelas];

		if ($id) {
			$in = 0;
			foreach ($id as $key) {
				$nisn = $key;
				$in++;

				$this->db->where('nisn', $nisn);
				$this->db->update('tbl_siswa', $data);

			}

			$this->session->set_flashdata('success', 'Kelas siswa berhasil diubah');
			redirect('admin/siswa','refresh');
		} else {
			$this->session->set_flashdata('error', 'Siswa belum dipilih');
			redirect('admin/siswa','refresh');
		}


	}

	function datakelas()
	{
	 	$id = $this->input->post('id_ed_k');
	    $kode_kelas = $this->input->post('kode_kelas_ed');
	    $nama_kelas = $this->input->post('nama_kelas_ed');
	    $level = $this->input->post('level_ed');
	    $kode_jurusan = $this->input->post('kode_jurusan_ed');

	    $data = [
	    	'kode_kelas' => $kode_kelas,
	    	'nama_kelas' => $nama_kelas,
	    	'level' => $level,
	    	'kode_jurusan' => $kode_jurusan,
	    ];

	   $ubah = $this->m_ubah->datakelas($data,$id);

	   if ($ubah) {
			$this->session->set_flashdata('success', 'Data kelas berhasil diubah');
			redirect('admin/kelas','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data kelas gagal diubah');
			redirect('admin/kelas','refresh');
		}
	}

	function datasiswa()
	{
		$id = $this->input->post('id');
		$data = [
		    'nama' => $this->input->post('nama'),
		    'nisn' => $this->input->post('nisn'),
		    'jk' => $this->input->post('jk'),
		    'tempat_lahir' => $this->input->post('tempat_lahir'),
		    'tg_lahir' => $this->input->post('tg_lahir'),
		    'kode_kelas' => $this->input->post('kode_kelas'),
		    'kategori' => $this->input->post('kategori'),
		];

		$ubah = $this->m_ubah->datasiswa($data,$id);

		 if ($ubah) {
			$this->session->set_flashdata('success', 'Data siswa berhasil diubah');
			redirect('admin/siswa','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data siswa gagal diubah');
			redirect('admin/siswa','refresh');
		}
	}

	function biaya()
	{
		$id = $this->input->post('id');

		$data = [

	    'kategori' => $this->input->post('kategori'),
	    'jenis' => $this->input->post('jenis'),
	    'kode' => $this->input->post('kode'),
	    'deskripsi' => $this->input->post('deskripsi'),
	    'jumlah' => $this->input->post('jumlah'),

		];

		$ubah = $this->m_ubah->biaya($data,$id);

		 if ($ubah) {
			$this->session->set_flashdata('success', 'Data biaya berhasil diubah');
			redirect('admin/biaya','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data biaya gagal diubah');
			redirect('admin/biaya','refresh');
		}
	}

	
}

/* End of file Ubah.php */
/* Location: ./application/controllers/Ubah.php



		echo "<pre>";
		print_r($_POST);
		echo "</pre>";


 */

