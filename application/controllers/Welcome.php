<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
		$this->load->model('Image_model');
	}

	public function index()
	{
		$data['images'] = $this->Image_model->get_images();
		$data['array_berita'] = $this->crud_model->mengambil_data('berita');
		// var_dump($data);die();

		$this->load->view('welcome_message',$data);
	}

	public function lapor()
	{
		$this->load->view('welcome_lapor');
	}
	public function lapor_go()
	{
		//variabel data
		$data = array(
			'nama_pelapor' => $this->input->post('nama_pelapor'),
			'alamat' => $this->input->post('alamat'),
			'nomor_telpon' => $this->input->post('nomor_telpon')
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('pelapor', $data);

		$obj_pelapor = $this->crud_model->get_last_row('pelapor');

		//variabel data
		$data = array(
			'tanggal_laporan' => $this->input->post('tanggal_laporan'),
			'id_pelapor' => $obj_pelapor->id_pelapor,
			'deskripsi_kasus' => $this->input->post('deskripsi_kasus'),
			'status_kasus' => 'Sedang berjalan'		
		);

		// var_dump($data);die();
		
		//tampilkan view
		$this->crud_model->masukan_data('kasus', $data);

		
		//redirect
		redirect('/welcome/lapor_berhasil', 'refresh');
	}

	public function lapor_berhasil()
	{
		$this->load->view('welcome_lapor_berhasil');
	}

}
