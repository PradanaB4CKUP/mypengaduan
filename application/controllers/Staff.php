<?php //based myfutsal
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
		$this->load->model('Image_model');
		$this->load->helper(array('form', 'url'));	
	}

	public function index()
	{		
		$data['images'] = $this->Image_model->get_images();
		$this->load->view('staff_index', $data);
	}	

	public function berita()
	{		
		$data['array_berita'] = $this->crud_model->mengambil_data('berita');
		$this->load->view('staff_berita', $data);
	}	

	public function create_image() {
		$this->load->view('staff_create_image');
	}	

	public function create_berita() {
		$this->load->view('staff_create_berita');
	}	

	public function store_berita() {
		$data = array(
		'title' => $this->input->post('title'),
		'isi' => $this->input->post('isi')
		);

		//tampilkan view
		$this->crud_model->masukan_data('berita', $data);
		
		//redirect
		redirect('staff/berita', 'refresh');
	  }	

	public function store_image() {
		$image_path = realpath(APPPATH . '../images');
		$config['upload_path'] =  $image_path;
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		  
		if (!$this->upload->do_upload('image')) {
		  $error = array('error' => $this->upload->display_errors());
		  var_dump($error);die();
		} else {
		  $data = array(
			'title' => $this->input->post('title'),
			'image' => $this->upload->data('file_name')
		  );
		  $this->Image_model->insert_image($data);
		  redirect('staff/index');
		}
	  }	

	  public function delete_image($id) {
		$this->Image_model->delete_image($id);
		redirect('staff/index');
	  }	

	  public function delete_berita($id) {
		//load model hapus data
		$this->crud_model->menghapus_data_id('berita','id_berita',$id);

		//redirect
		redirect('staff/berita', 'refresh');
	  }	

	public function login_staff() {
        $id_staff = $this->input->post('id_staff');
        $password_staff = $this->input->post('password_staff');

		// var_dump($_POST);die();////////////////
        
        $staff = $this->akun_model->login_staff($id_staff, $password_staff);
        
        if ($staff) {
            $this->session->set_userdata(array(
                'id_staff' => $staff->id_staff,
                'login' => true
            ));
			// print_r($_SESSION);die();
            redirect('staff/index');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
			echo '<script>alert("Id atau password salah. Mohon tulis kembali!")</script>';
            redirect('akun/akun_staff', 'refresh');
        }
    }
    
    public function logout_staff() {
        $this->session->sess_destroy();
        redirect('akun/akun_staff');
    }

	public function view_kasus()
	{
		// var_dump($this->session->userdata('id_pelapor'));die();

		$data['array_kasus'] = $this->crud_model->mengambil_data_join_id('kasus', ['pelapor'] ,'pelapor.id_pelapor',$this->session->userdata('id_pelapor'));
		// print_r($_SESSION);die();
		// var_dump($data);die();
		
		$this->load->view('user_view_kasus',$data);
	}	
	
	public function view_absen_id($id)
	{
		//load model crud
		$data['array_log_absen'] = $this->crud_model->mengambil_data_join_id('log_absen',['siswa','kelas'],'id_absen',$id);
		// $data['obj_log_absen'] = $data['array_log_absen'][0];
		
		// var_dump($data);die();
		
		$this->load->view('admin_view_absen_id',$data);
	}	
	
	public function view_pelapor()
	{
		
		$data['array_pelapor'] = $this->crud_model->mengambil_data('pelapor');
		$this->load->view('admin_view_pelapor',$data);
	}	
	
	public function view_siswa()
	{
		$data['array_siswa'] = $this->crud_model->mengambil_data('siswa');
		
		$this->load->view('admin_view_siswa',$data);
	}	
	
	public function view_waktu_sewa()
	{
		$data['array_waktu_sewa'] = $this->crud_model->mengambil_data('waktu_sewa');
		
		$this->load->view('admin_view_waktu_sewa',$data);
	}	

	public function view_pencarian()
	{
		$data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		
		$this->load->view('admin_view_pencarian',$data);
	}	

	public function view_pencarian_go()
	{
		$array_siswa = $this->crud_model->mengambil_data('siswa');

		// echo substr($array_siswa[0]->nama_siswa,0,2);

		$cari = strtoupper($this->input->post('nama_siswa'));
		// echo strlen($cari);
		$ketemu = false;
		$list_index = array();

		for ($i = 0; $i < count($array_siswa); $i++){
			// echo strtoupper(substr($array_siswa[$i]->nama_siswa,0,2));
			if(strtoupper(substr($array_siswa[$i]->nama_siswa,0,strlen($cari))) == $cari){
				$ketemu = true;
				$list_index[] = $i;
			}
		}

		if ($ketemu){
			// echo "Data ditemukan sebanyak ".count($list_index);
		} else {
			echo '<script> alert("Data tidak ditemukan, harap tulis ulang!!"); </script>';

			//redirect
			redirect('/admin/view_pencarian', 'refresh');
		}
		
		foreach($list_index as $index){
			$data['array_siswa'][] = $array_siswa[$index];
		}
		
		// var_dump($data);
		$this->load->view('admin_view_pencarian_go',$data);
	}	

	public function add_pelapor()
	{
		// $data['array_kasus'] = $this->crud_model->mengambil_data('kasus');
		// $data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		
		$this->load->view('admin_add_pelapor',$data='');
	}	
	
	public function add_siswa()
	{
		$data['array_kasus'] = $this->crud_model->mengambil_data('kasus');
		$data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		
		$this->load->view('admin_add_siswa',$data);
	}	
	
	public function add_kasus()
	{
		$data['array_pelapor'] = $this->crud_model->mengambil_data('pelapor');

		$this->load->view('user_add_kasus',$data);
	}	
	
	public function add_waktu_sewa()
	{
		$this->load->view('admin_add_waktu_sewa');
	}	

	public function edit_waktu_sewa($id)
	{
		//load model crud
		$data['array_waktu_sewa'] = $this->crud_model->mengambil_data_id('waktu_sewa','id_waktu_sewa',$id);
		$data['obj_waktu_sewa'] = $data['array_waktu_sewa'][0];
		
		// var_dump($data);die();

		$this->load->view('admin_edit_waktu_sewa', $data);
	}	

	public function edit_absen($id)
	{
		//load model crud
		$data['array_absen'] = $this->crud_model->mengambil_data_id('absen','id_absen',$id);
		$data['array_kasus'] = $this->crud_model->mengambil_data('kasus');
		$data['array_kelas'] = $this->crud_model->mengambil_data('kelas');
		$data['obj_absen'] = $data['array_absen'][0];

		// var_dump($data);die();

		$this->load->view('admin_edit_absen', $data);
	}	

	public function edit_pelapor($id)
	{
		//load model crud
		$data['array_pelapor'] = $this->crud_model->mengambil_data_id('pelapor','id_pelapor',$id);
		$data['obj_pelapor'] = $data['array_pelapor'][0];
		
		// var_dump($data);die();

		$this->load->view('admin_edit_pelapor', $data);
	}	

	public function hapus_waktu_sewa($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('waktu_sewa','id_waktu_sewa',$id);

		//redirect
		redirect('/admin/view_waktu_sewa', 'refresh');
	}

	public function hapus_kasus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('kasus','id_kasus',$id);

		//redirect
		redirect('/user/view_kasus', 'refresh');
	}

	public function hapus_absen($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('absen','id_absen',$id);

		//redirect
		redirect('/admin/view_absen', 'refresh');
	}

	public function hapus_pelapor($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('pelapor','id_pelapor',$id);

		//redirect
		redirect('/admin/view_pelapor', 'refresh');
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
	
	public function edit_waktu_sewa_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'nama_hari' => $this->input->post('nama_hari'),
			'jam' => $this->input->post('jam')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('waktu_sewa', $data,'id_waktu_sewa',$this->input->post('id_waktu_sewa'));
		
		//redirect
		redirect('/admin/view_waktu_sewa', 'refresh');
	}	
	
	public function edit_absen_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'id_kasus' => $this->input->post('id_kasus'),
			'nama_guru' => $this->input->post('nama_guru'),
			'id_kelas' => $this->input->post('id_kelas'),
			'tanggal' => $this->input->post('tanggal'),
			'jam_mulai' => $this->input->post('jam_mulai'),
			'jam_selesai' => $this->input->post('jam_selesai')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('absen', $data,'id_absen',$this->input->post('id_absen'));
		
		//redirect
		redirect('/admin/view_absen', 'refresh');
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
		redirect('/user/view_kasus', 'refresh');
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
	
	public function add_waktu_sewa_go()
	{
		// var_dump($_POST);
		
		//variabel data
		$jam = $this->input->post('jam1') . ' - '. $this->input->post('jam2');
		
		$data = array(
			'nama_hari' => $this->input->post('nama_hari'),
			'jam' => $jam		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('waktu_sewa', $data);
		
		//redirect
		redirect('/admin/view_waktu_sewa', 'refresh');
	}	
	
	public function add_kelas_go()
	{
		// var_dump($_POST);
		
		//variabel data
		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
			'jumlah_murid' => $this->input->post('jumlah_murid')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('kelas', $data);
		
		//redirect
		redirect('/admin/view_kelas', 'refresh');
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
}