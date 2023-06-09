<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tambah extends CI_Controller {

	function kelas()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$this->form_validation->set_rules('kode_kelas', 'Kode Kelas', 'trim|required|is_unique[tbl_kelas.kode_kelas]');
		$this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'trim|required|is_unique[tbl_kelas.nama_kelas]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Data kelas gagal ditambah, kode atau nama kelas sudah digunakan');
			redirect('admin/kelas','refresh');
		} else {
			$data = [
				'kode_kelas' => $this->input->post('kode_kelas', TRUE), 
				'nama_kelas' => $this->input->post('nama_kelas', TRUE), 
				'level' => $this->input->post('level', TRUE), 
				'kode_jurusan' => $this->input->post('kode_jurusan', TRUE),
			];

			$tambah = $this->m_tambah->kelas($data);

			if ($tambah) {
				$this->session->set_flashdata('success', 'Data kelas berhasil ditambah');
				redirect('admin/kelas','refresh');
			} else {
				$this->session->set_flashdata('error', 'Data kelas gagal ditambah');
				redirect('admin/kelas','refresh');
			}
		}
	}

	function siswa()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$this->form_validation->set_rules('nisn', 'Nisn', 'trim|required|is_unique[tbl_siswa.nisn]');

		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('error', 'Data siswa gagal ditambah, nisn sudah digunakan');
			redirect('admin/siswa','refresh');
		} else {
			$data = [
				'nama' => $this->input->post('nama', TRUE),
				'nisn' => $this->input->post('nisn', TRUE),
				'kode_kelas' => $this->input->post('kode_kelas', TRUE),
				'kategori' => $this->input->post('kategori', TRUE),
				'tempat_lahir' => $this->input->post('tempat_lahir', TRUE),
				'tg_lahir' => $this->input->post('tg_lahir', TRUE),
				'jk' => $this->input->post('jk', TRUE),
			];

			$tambah = $this->m_tambah->siswa($data);

			if ($tambah) {
				$this->session->set_flashdata('success', 'Data siswa berhasil ditambah');
				redirect('admin/siswa','refresh');
			} else {
				$this->session->set_flashdata('error', 'Data siswa gagal ditambah');
				redirect('admin/siswa','refresh');
			}
		}
	}

	function biaya()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data = [
			'jenis' => $this->input->post('jenis'),
			'kode' => $this->input->post('kode'),
			'deskripsi' => $this->input->post('deskripsi'),
			'jumlah' => $this->input->post('jumlah'),
			'kategori' => $this->input->post('kategori'),
			'status' => '1',
		];

		$tambah = $this->m_tambah->biaya($data);

		if ($tambah) {
			$this->session->set_flashdata('success', 'Data biaya berhasil ditambah');
			redirect('admin/biaya','refresh');
		} else {
			$this->session->set_flashdata('error', 'Data biaya gagal ditambah');
			redirect('admin/biaya','refresh');
		}

	}

	public function inputPembayaran()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}
		
		$nisn = $this->input->post('siswa');
		$bulan = $this->input->post('bulan');
		$jumlah = $this->input->post('jumlah');
		$seharusnya = $this->input->post('seharusnya');
		$tgl_bayar = date('Y-m-d');
		$selisih = $jumlah-$seharusnya;
		$petugas = $this->session->userdata('nama');
		$jenis = 'SPP';
		$th_pelajaran = $this->db->get_where('tbl_instansi', ['id_' => '10'])->row_array()['th_pelajaran'];

		$prefix = 'B';

		$this->db->select('RIGHT(tbl_pembayaran.kode_pembayaran,5) as kode', FALSE);
		$this->db->order_by('kode_pembayaran','DESC');
		$this->db->limit(1);
		$query_ = $this->db->get('tbl_pembayaran'); 
		if($query_->num_rows() <> 0){      
				   //jika kode ternyata sudah ada.      
			$data_ = $query_->row();      
			$kode = intval($data_->kode) + 1;    
		} else {      
				   //jika kode belum ada      
			$kode = 1;    
		}

		$kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kode_pembayaran = $prefix.'-'.$kodemax;
		
		$data = [
			'nisn' => $nisn,
			'bulan' => $bulan,
			'jumlah' => $jumlah,
			'seharusnya' => $seharusnya,
			'tgl_bayar' => $tgl_bayar,
			'selisih' => $selisih,
			'petugas' => $petugas,
			'jenis' => $jenis,
			'th_pelajaran' => $th_pelajaran,
			'kode_pembayaran' => $kode_pembayaran,
			'deskripsi' => $this->input->post('deskripsi'),
		];

		$simpan = $this->m_admin->simpan_spp($data);

		if ($simpan) {
			$this->session->set_flashdata('success', 'Pembayaran berhasil disimpan');
			$this->session->set_flashdata('cetak', '<a target="_blank" href="'.base_url('admin/cetakbukti/').$kode_pembayaran.'" class="btn btn-success" ><span class="fa fa-print"></span>  Cetak Bukti Pembayaran</a>');
			redirect('admin/spp','refresh');
		} else {
			$this->session->set_flashdata('error', 'Pembayaran gagal disimpan');
			redirect('admin/spp','refresh');
		}
	}

	
	function inputPembayaranNon()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}
		error_reporting(0);
		$kategori = $this->input->post('kategori');
		$seharusnya = $this->input->post('harus');

		$this->db->where('kategori', $kategori);
		$this->db->where_not_in('jenis', 'SPP');
		$query = $this->db->get('tbl_biaya')->result_array();

		$prefix = 'B';

		$this->db->select('RIGHT(tbl_pembayaran.kode_pembayaran,5) as kode', FALSE);
		$this->db->order_by('kode_pembayaran','DESC');
		$this->db->limit(1);
		$query_ = $this->db->get('tbl_pembayaran'); 
		if($query_->num_rows() <> 0){      
				   //jika kode ternyata sudah ada.      
			$data_ = $query_->row();      
			$kode = intval($data_->kode) + 1;    
		} else {      
				   //jika kode belum ada      
			$kode = 1;    
		}

		$kodemax = str_pad($kode, 5, "0", STR_PAD_LEFT);
		$kode_pembayaran = $prefix.'-'.$kodemax;


		$data = array();

		for ($i=0; $i < count($query); $i++) { 

			$jumlah = $this->input->post($query[$i]['jenis']);

			$seharusnya = $query[$i]['jumlah'];

			$selisih = $jumlah-$seharusnya;

			$dt = [
				'nisn' => $this->input->post('siswa'),
				'tgl_bayar' => date('Y-m-d'),
				'th_pelajaran' => $this->db->get_where('tbl_instansi',['id_' => '10'])->row_array()['th_pelajaran'],
				'petugas' => $this->session->userdata('nama'),
				'jenis' => $query[$i]['jenis'],
				'jumlah' => $jumlah,
				'seharusnya' => $seharusnya,
				'selisih' => $selisih,
				'kode_pembayaran' => $kode_pembayaran,
				'deskripsi' => $query[$i]['deskripsi'],


			];

			array_push($data, $dt);

		}

		$simpan = $this->m_tambah->bayarNon($data);

		if ($simpan) {
			$this->session->set_flashdata('success', 'Pembayaran berhasil disimpan');
			$this->session->set_flashdata('cetak', '<a target="_blank" href="'.base_url('admin/cetakbukti/').$kode_pembayaran.'" class="btn btn-success" ><span class="fa fa-print"></span>  Cetak Bukti Pembayaran</a>');
			redirect('admin/non_spp','refresh');
		} else {
			$this->session->set_flashdata('error', 'Pembayaran gagal disimpan');
			redirect('admin/non_spp','refresh');
		}

	}

}

/* End of file Tambah.php */
/* Location: ./application/controllers/Tambah.php */