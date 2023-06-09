<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Get extends CI_Controller {

	function jenis()
	{
		$nisn = $this->input->post('nisn');

		$kategori = $this->db->get_where('tbl_siswa',['nisn' => $nisn])->row_array()['kategori'];

		$data = $this->db->get_where('tbl_biaya', ['kategori' => $kategori, 'jenis' => 'SPP'])->row_array();

		$tampil = '<label>Pilih Bulan</label><br>';
		$tampil .= '<input type="radio" name="bulan" value="01" required>&nbsp;<label>Januari</label>';
		$tampil .= '<input type="radio" name="bulan" value="02" style="margin-left:15px" required>&nbsp;<label>Februari</label>';
		$tampil .= '<input type="radio" name="bulan" value="03" style="margin-left:15px" required>&nbsp;<label>Maret</label>';
		$tampil .= '<input type="radio" name="bulan" value="04" style="margin-left:15px" required>&nbsp;<label>April</label>';
		$tampil .= '<input type="radio" name="bulan" value="05" style="margin-left:15px" required>&nbsp;<label>Mei</label>';
		$tampil .= '<input type="radio" name="bulan" value="06" style="margin-left:15px" required>&nbsp;<label>Juni</label>';
		$tampil .= '<input type="radio" name="bulan" value="07" style="margin-left:15px" required>&nbsp;<label>Juli</label>';
		$tampil .= '<input type="radio" name="bulan" value="08" style="margin-left:15px" required>&nbsp;<label>Agustus</label>';
		$tampil .= '<input type="radio" name="bulan" value="09" style="margin-left:15px" required>&nbsp;<label>September</label>';
		$tampil .= '<input type="radio" name="bulan" value="10" style="margin-left:15px" required>&nbsp;<label>Oktober</label>';
		$tampil .= '<input type="radio" name="bulan" value="11" style="margin-left:15px" required>&nbsp;<label>November</label>';
		$tampil .= '<input type="radio" name="bulan" value="12" style="margin-left:15px" required>&nbsp;<label>Desember</label>';

		$tampil .= '<br><br>';
		$tampil .= '<label>Jumlah Dibayar</label><br>';
		$tampil .= '<input type="number" name="jumlah" class="form-control col-md-6" required>';
		$tampil .= '<small>Jumlah Seharusnya Rp. '.rupiah($data['jumlah']).'</small>';

		$tampil .= '<input type="hidden" name="seharusnya" value="'.$data['jumlah'].'">';
		$tampil .= '<input type="hidden" name="deskripsi" value="'.$data['deskripsi'].'">';


		echo $tampil;
	}

	function jenis_non()
	{
		$nisn = $this->input->post('nisn');

		$kategori = $this->db->get_where('tbl_siswa',['nisn' => $nisn])->row_array()['kategori'];

		$this->db->where('kategori', $kategori);
		$this->db->where_not_in('jenis', 'SPP');
		$data = $this->db->get('tbl_biaya');
		$query = $data->result();
		$jumlah = $data->row_array()['jumlah'];

		$tampil = '';
		$tampil .= '<input type="hidden" name="kategori" value="'.$kategori.'">';
		

		foreach ($query as $key) {
			$tampil .= '<input type="hidden" name="harus[]" value="'.$key->jumlah.'">';
			$tampil .= '<div class="row">';
			$tampil .= '<label>'.$key->jenis.'</label><input type="number" name="'.$key->jenis.'" class="form-control">';
			$tampil .= '<small>Jumlah Seharusnya Rp. '.rupiah($key->jumlah).'</small>';
			$tampil .= '</div>';
			$tampil .= '<br>';
		}

		echo $tampil;
	}

	function ubahkelas()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('tbl_kelas',['id_' => $id])->result();

		echo json_encode($data);
	}

	function ubahsiswa()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('tbl_siswa',['id_' => $id])->result();

		echo json_encode($data);
	}

	function ubahbiaya()
	{
		$id = $this->input->post('id');
		$data = $this->db->get_where('tbl_biaya',['id_' => $id])->result();

		echo json_encode($data);
	}


}

/* End of file Get.php */
/* Location: ./application/controllers/Get.php */