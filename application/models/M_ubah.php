<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ubah extends CI_Model {

	function instansi($data,$id_)
	{
		$this->db->where('id_', $id_);
		$ubah = $this->db->update('tbl_instansi', $data);
		if ($ubah) {
			return TRUE;
		} else {
			return FALSE;
		}
	}

	function logo()
	{
		$filename = $_FILES['logo']['name'];

		$extensi = substr(strrchr($filename, '.'), 1);

		$config['upload_path']          = './assets/images/';
                $config['allowed_types']        = 'jpg|png';
                $config['max_size']             = 300;
                $config['file_name']            = 'logo_instansi';
                $config['overwrite']			= TRUE;


                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('logo')) 
                {
                       return $this->upload->display_errors();
               } else {
                       $object = [
                              'logo' => $config['file_name'].'.'.$extensi
                      ];

                      $this->db->update('tbl_instansi', $object);

                      return 'sukses';
              }
        }

        function datakelas($data,$id)
        {
                $this->db->where('id_', $id);
                $ubah = $this->db->update('tbl_kelas', $data);
                if ($ubah) {
                        return true;
                } else {
                        return false;
                }
                
        }

         function datasiswa($data,$id)
        {
                $this->db->where('id_', $id);
                $ubah = $this->db->update('tbl_siswa', $data);
                if ($ubah) {
                        return true;
                } else {
                        return false;
                }
                
        }

         function biaya($data,$id)
        {
                $this->db->where('id_', $id);
                $ubah = $this->db->update('tbl_biaya', $data);
                if ($ubah) {
                        return true;
                } else {
                        return false;
                }
                
        }

}

/* End of file M_ubah.php */
/* Location: ./application/models/Ubah.php */