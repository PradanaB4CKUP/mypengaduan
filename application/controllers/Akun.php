<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('crud_model');
		$this->load->model('akun_model');
	}
	
	public function index()
	{
		$this->load->view('akun_login');
	}

	public function akun_pelapor()
	{
		$this->load->view('akun_login_pelapor');
	}

	public function login_go()
	{
		//ambil id & password
		$id = $this->input->post('id');
		$password = md5($this->input->post('password')); //enkripsi md5
		
		//cek akun jika benar maka login
		$this->akun_model->cek_akun($id, $password);
	}

	public function daftar()
	{
		$this->load->view('akun_daftar');
	}

	public function daftar_go()
	{
		//variabel data
		$data = array(
			'nama_pelapor' => $this->input->post('nama_pelapor'),
			'alamat' => $this->input->post('alamat'),
			'nomor_telpon' => $this->input->post('nomor_telpon')
		);
		// var_dump($data);die();			
		$this->crud_model->masukan_data('pelapor', $data);


		$obj_pelapor = $this->crud_model->get_last_row('pelapor');

		//variabel data
		$data = array(
			'id_user' => $this->input->post('id_user'),
			'password_user' => $this->input->post('password_user'),
			'id_pelapor' => $obj_pelapor->id_pelapor		
		);

		// var_dump($data);die();		
		$this->crud_model->masukan_data('user', $data);

		echo '<script> alert("Pendaftaran berhasil, silahkan login terlebih dahulu!"); </script>';

		//redirect
		redirect('/akun/akun_pelapor', 'refresh');
	}

}
