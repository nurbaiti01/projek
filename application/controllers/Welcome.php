<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function home()
	{
		echo "ini adalah halaman home";
	}
	public function form_mahasiswa()
	{
		$this->load->view('form_mahasiswa');
	}
	public function insert_mahasiswa()
	{
		$data= $this->input->post();

		$result = $this->db->insert('mahasiswa', $data);

		if ($result != null){
			redirect(base_url('view_mahasiswa'));

		}else {

			//echo "Data Gagal Disimpan";
		}

		//echo json_encode($data);
	}
	public function form_dosen()
	{
		$this->load->view('form_dosen');
	}
	public function insert_dosen()
	{
		$data= $this->input->post();
		$result = $this->db->insert('dosen', $data);

		if ($result != null){
			echo "Data Berhasil Disimpan";

		}else {

			echo "Data Gagal Disimpan";
		}

		//echo json_encode($data);
	}
	public function view_mahasiswa()
	{
		$data ['mahasiswa']=$this->db->get ("mahasiswa")->result();
		//echo json_encode($data);
		$this->load->view('view_mahasiswa',$data);
		//$this->load->view('view_mahasiswa');
	}
	public function view_dosen()
	{
		$data ['dosen']=$this->db->get ("dosen")->result();
		//echo json_encode($data);
		$this->load->view('view_dosen',$data);
		//$this->load->view('view_dosen');
	}

	public function form_edit_dosen($id){
		$data ['dosen']= $this->db->get_where('dosen',array('id' =>$id))->row();

		$this->load->view('form_edit_dosen', $data);
	}
	public function form_edit_mahasiswa($id){
		$data ['mahasiswa']= $this->db->get_where('mahasiswa',array('id' =>$id))->row();

		$this->load->view('form_edit_mahasiswa', $data);
	}
	public function edit_mahasiswa(){
		$id = $this->input->post('id');
	
		$NewData['nama']= $this->input->post('nama');
		$NewData['nim']= $this->input->post('nim');
		$NewData['prodi']= $this->input->post('prodi');
	
		$this->db->where('id', $id);
		
		$result = $this->db->update('mahasiswa', $NewData);
		if ($result) {
			redirect(base_url('view_mahasiswa'));
			} else {
				//echo "gagal edit data!";
			}
		}
		//public function hapus_mahasiswa($id) {
			// Panggil model untuk menghapus data
			//$this->Mahasiswa_model->delete($id);
			
			// Redirect ke halaman data mahasiswa setelah penghapusan
			//redirect('mahasiswa/index'); // Ganti dengan
	
}