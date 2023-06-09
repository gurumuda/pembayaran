<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username', 'Username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('login/halaman_utama');

		} else {

			$this->_login();

		}
	}

	private function _login()
	{
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);

		$data = $this->db->get_where('tbl_pengguna', ['xUser' => $username])->row_array();

		if ($data > 0) {
			if (password_verify($password, $data['xPass'])) {
				
				$array = array(
					'username' => $username,
					'nama' => $data['nama'],
				);
				
				$this->session->set_userdata( $array );

				redirect('admin','refresh');

			} else {

				$this->session->set_flashdata('error', 'username atau password salah');
				redirect('','refresh');
			}
			
		} else {
			$this->session->set_flashdata('error', 'username atau password salah');
			redirect('','refresh');
		}
		
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */