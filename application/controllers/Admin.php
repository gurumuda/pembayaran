<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data['jkelas'] = $this->m_admin->data_kelas()->num_rows();
		$data['jsiswa'] = $this->m_admin->jumlah_siswa();
		$data['jpembayaran'] = $this->m_admin->jenis_pembayaran();
		$data['juang'] = $this->m_admin->jum_uang();



		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	public function kelas()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data['kelas'] = $this->m_admin->data_kelas()->result();

		/* Hitung jumlah siswa masing-masing kelas */
		$j = array();
		foreach ($data['kelas'] as $dt) {
			array_push($j, $this->db->get_where('tbl_siswa', ['kode_kelas' => $dt->kode_kelas])->num_rows());
		}
		$data['jumlah'] = $j;

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/kelas', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	public function instansi()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data['instansi'] = $this->m_admin->data_instansi();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/instansi', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	public function siswa()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data['kelas'] = $this->m_admin->data_kelas()->result();

		$data['siswa'] = $this->m_admin->data_siswa()->result();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/siswa', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	public function biaya()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data['biaya1'] = $this->m_admin->biaya1()->result();
		$data['biaya2'] = $this->m_admin->biaya2()->result();
		$data['biaya3'] = $this->m_admin->biaya3()->result();


		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/biaya', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	public function spp()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data['siswa'] = $this->m_admin->data_siswa()->result();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/spp', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	public function non_spp()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data['siswa'] = $this->m_admin->data_siswa()->result();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/non_spp', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	function cetakbukti($kode_pembayaran)
	{
		$data['kode_'] = $kode_pembayaran;

		$data['instansi'] = $this->m_admin->data_instansi();

		$this->db->where('kode_pembayaran', $kode_pembayaran);
		$dt = $this->db->get('tbl_pembayaran');
		$data['pembayaran'] = $dt->result();

		$data['tgl_bayar'] = $this->db->get_where('tbl_pembayaran',['kode_pembayaran' => $kode_pembayaran])->row_array()['tgl_bayar'];

		$nisn = $dt->row_array()['nisn'];
		$data['siswa'] = $this->db->get_where('tbl_siswa',['nisn' => $nisn])->row_array();

		// jumlah pembayaran
		$jml = $this->db->get_where('tbl_pembayaran', ['kode_pembayaran' => $kode_pembayaran])->result_array();
		$juml = array();
		$hrs = array();
		foreach ($jml as $jumlah) {
			array_push($juml, $jumlah['jumlah']);
			array_push($hrs, $jumlah['seharusnya']);
		}
		$data['jumlah_bayar'] = array_sum($juml);
		$data['harus'] = array_sum($hrs);

		if ($data['jumlah_bayar'] > $data['harus']) {
			$data['sisa'] = $data['jumlah_bayar']-$data['harus'];
		} elseif($data['jumlah_bayar'] < $data['harus']) {
			$data['sisa'] = $data['harus']-$data['jumlah_bayar'];
		} elseif ($data['jumlah_bayar'] == $data['harus']) {
			$data['sisa'] = '0';
		}
			
		$this->load->view('admin/cetakbukti', $data);
	}

	public function laporan()
	{
		if (! $this->session->userdata('username')) {
			redirect('','refresh');
		}

		$data['kelas'] = $this->m_admin->data_kelas()->result();

		$data['siswa'] = $this->m_admin->data_siswa()->result();

		$data['jenis_biaya'] = $this->m_admin->jenis_biaya();

		$this->load->view('admin/meta');
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/laporan', $data);
		$this->load->view('admin/footer');
		$this->load->view('admin/script');
	}

	

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('','refresh');
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */