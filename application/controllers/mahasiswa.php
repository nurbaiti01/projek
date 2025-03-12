<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

    public function view_mahasiswa()
    {
        $data['mahasiswa'] = $this->db->get('mahasiswa')->result();
        $this->load->view('view_mahasiswa', $data);
    }

    public function deleteUser($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('mahasiswa');
    }

    public function delete($id)
    {
        if ($this->deleteUser($id)) {
            $this->session->set_flashdata('message', 'Data berhasil dihapus.'); // Set flash message
            redirect('mahasiswa/view_mahasiswa'); // Redirect ke halaman daftar mahasiswa
        } else {
            echo "Terjadi kesalahan saat menghapus data.";
        }
    }



    
}