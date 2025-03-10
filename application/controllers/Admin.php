<?php //based myfutsal
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
	}

	public function index()
	{
		$data['jumlah_pelapor'] = $this->crud_model->menghitung_jumlah_row('pelapor');
		$data['jumlah_kasus'] = $this->crud_model->menghitung_jumlah_row('kasus');
		$data['jumlah_kasus_masuk'] = $this->crud_model->menghitung_jumlah_row_where('kasus','status_kasus','Laporan Terkirim');
		$data['jumlah_kasus_tolak'] = $this->crud_model->menghitung_jumlah_row_where('kasus','status_kasus','Ditolak');
		$data['jumlah_kasus_berlajan'] = $this->crud_model->menghitung_jumlah_row_where('kasus','status_kasus','Sedang berjalan');
		$data['jumlah_kasus_selesai'] = $this->crud_model->menghitung_jumlah_row_where('kasus','status_kasus','Selesai');
		// var_dump($data);die();
		
		$this->load->view('admin_index',$data);
	}	

	public function view_kasus()
	{
		$data['array_kasus'] = $this->crud_model->mengambil_data_join('kasus',['pelapor']);
		// var_dump($data);die();
		
		$this->load->view('admin_view_kasus',$data);
	}	
	
	public function export()
	{
// Load model yang berisi data yang akan diekspor
        $this->load->model('data_model');
        $data = $this->data_model->get_all_data();

        // Nama file yang akan dihasilkan
        $filename = 'data_export_' . date('Ymd') . '.csv';

        // Set header untuk file CSV
        header("Content-Description: File Transfer");
        header("Content-Disposition: attachment; filename=$filename");
        header("Content-Type: application/csv; ");

        // Membuka file output
        $file = fopen('php://output', 'w');

        // Menuliskan header CSV
        $header = array_keys((array)$data[0]);
        fputcsv($file, $header);

        // Menuliskan data ke file CSV
        foreach ($data as $row) {
            fputcsv($file, (array)$row);
        }

        // Menutup file output
        fclose($file);
        exit;
	}
	
	public function add_kasus()
	{
		$data['array_pelapor'] = $this->crud_model->mengambil_data('pelapor');

		$this->load->view('admin_add_kasus',$data);
	}		

	public function hapus_kasus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('kasus','id_kasus',$id);

		//redirect
		redirect('/admin/view_kasus', 'refresh');
	}

	public function hapus_pelapor($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('pelapor','id_pelapor',$id);

		//redirect
		redirect('/admin/view_pelapor', 'refresh');
	}
	
	public function edit_kasus($id)
	{
		//load model crud
		$data['array_kasus'] = $this->crud_model->mengambil_data_join_id('kasus',['pelapor'],'kasus.id_kasus',$id);
		// mengambil_data_id('kasus','id_kasus',$id);
		
		$data['obj_kasus'] = $data['array_kasus'][0];
		
		// var_dump($data);die();

		$this->load->view('admin_edit_kasus', $data);
	}	

	public function edit_kasus_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'tanggal_laporan' => $this->input->post('tanggal_laporan'),
			'id_pelapor' => $this->input->post('id_pelapor'),
			'deskripsi_kasus' => $this->input->post('deskripsi_kasus'),
			'status_kasus' => $this->input->post('status_kasus')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('kasus', $data,'id_kasus',$this->input->post('id_kasus'));
		
		//redirect
		redirect('/admin/view_kasus', 'refresh');
	}	

	public function view_pelapor()
	{
		
		$data['array_pelapor'] = $this->crud_model->mengambil_data('pelapor');
		$this->load->view('admin_view_pelapor',$data);
	}	
	
	public function add_pelapor()
	{
		// $data['array_kasus'] = $this->crud_model->mengambil_data('kasus');
		// $data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		
		$this->load->view('admin_add_pelapor',$data='');
	}	

	public function edit_pelapor_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'nama_pelapor' => $this->input->post('nama_pelapor'),
			'alamat' => $this->input->post('alamat'),
			'nomor_telpon' => $this->input->post('nomor_telpon')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('pelapor', $data,'id_pelapor',$this->input->post('id_pelapor'));
		
		//redirect
		redirect('/admin/view_pelapor', 'refresh');
	}	
	
	public function add_pelapor_go()
	{
		// var_dump($_POST);
		
		//variabel data
		$data = array(
			'nama_pelapor' => $this->input->post('nama_pelapor'),
			'alamat' => $this->input->post('alamat'),
			'nomor_telpon' => $this->input->post('nomor_telpon')
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('pelapor', $data);
		
		//redirect
		redirect('/admin/view_pelapor', 'refresh');
	}	
	
	
	public function add_kasus_go()
	{
		// var_dump($_POST);
		
		//variabel data
		$data = array(
			'tanggal_laporan' => $this->input->post('tanggal_laporan'),
			'id_pelapor' => $this->input->post('id_pelapor'),
			'deskripsi_kasus' => $this->input->post('deskripsi_kasus'),
			'status_kasus' => 'Sedang berjalan'		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('kasus', $data);
		
		//redirect
		redirect('/admin/view_kasus', 'refresh');
	}	
	
	public function reset_kasus()
	{
		// var_dump($_POST);
		
		//tampilkan view
		$this->crud_model->mengosongkan_tabel('kasus');
		
		//redirect
		redirect('/admin/view_kasus', 'refresh');
	}	

	public function algoritma_genetika()
	{
		set_time_limit(120);
		$this->load->model('m_admin');
		$data['pelapor'] = $this->crud_model->mengambil_data('pelapor');
		$data['waktu'] = $this->crud_model->mengambil_data('waktu_sewa');

		$this->load->view('v_admin_kasus_otomatis',$data);	

		//redirect
		// redirect('/admin/view_kasus', 'refresh');		
	}

	public function send_mail()
	{
        $this->load->library('email');

		$config['protocol'] = 'smtp';
		$config['smtp_host'] = 'sandbox.smtp.mailtrap.io'; // Ganti dengan host SMTP anda
		$config['smtp_user'] = '1b4dbc69fa6738'; // Ganti dengan email anda
		$config['smtp_pass'] = '949f5f0d5bc223'; // Ganti dengan password anda
		$config['smtp_port'] = 25;
		$config['mailtype'] = 'html';
		$config['charset']  = 'iso-8859-1';
		$config['wordwrap'] = TRUE;

        $from_email = "email@example.com";
        $to_email = 'yikerok695@eluxeer.com';
        //Load email library
        $this->email->from($from_email, 'Identification');
        $this->email->to($to_email);
        $this->email->subject('Send Email Codeigniter');
        $this->email->message('The email send using codeigniter library');
        //Send mail
        if($this->email->send())
            $this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
        else
            $this->session->set_flashdata("email_sent","You have encountered an error");
        $this->load->view('contact_email_form');		
	}

	
}