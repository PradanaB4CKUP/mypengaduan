<?php //based myfutsal
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
		// $this->load->library('Telegram');
		function sendMessage($telegram_id, $message_text, $secret_token) {
			$url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
			$url = $url . "&text=" . urlencode($message_text);
			$ch = curl_init();
			$optArray = array(
					CURLOPT_URL => $url,
					CURLOPT_RETURNTRANSFER => true
			);
			curl_setopt_array($ch, $optArray);
			$result = curl_exec($ch);
			$err = curl_error($ch);
			curl_close($ch);
		
			if ($err) {
			   echo 'Pesan gagal terkirim, error :' . $err;
			}else{
				echo 'Pesan terkirim';
			}
		}
	}

	public function index()
	{
		$data['jumlah_pelapor'] = $this->crud_model->menghitung_jumlah_row('pelapor');
		$data['jumlah_kasus'] = $this->crud_model->menghitung_jumlah_row('kasus');
		$data['jumlah_kasus_berlajan'] = $this->crud_model->menghitung_jumlah_row_where('kasus','status_kasus','Sedang berjalan');
		$data['jumlah_kasus_selesai'] = $this->crud_model->menghitung_jumlah_row_where('kasus','status_kasus','Selesai');
		// var_dump($data);die();
		
		$this->load->view('user_index',$data);
	}	

	public function login_user() {
        $id_user = $this->input->post('id_user');
        $password_user = $this->input->post('password_user');

		// var_dump($_POST);die();////////////////
        
        $user = $this->akun_model->login_user($id_user, $password_user);
        
        if ($user) {
            $this->session->set_userdata(array(
                'id_user' => $user->id_user,
                'id_pelapor' => $user->id_pelapor,
                'login' => true
            ));
			// print_r($_SESSION);die();
            redirect('user/view_kasus');
        } else {
            $this->session->set_flashdata('error', 'Username atau password salah');
			echo '<script>alert("Id atau password salah. Mohon tulis kembali!")</script>';
            redirect('akun/akun_pelapor', 'refresh');
        }
    }
    
    public function logout_user() {
        $this->session->sess_destroy();
        redirect('akun/akun_pelapor');
    }

	public function view_kasus()
	{
		// var_dump($this->session->userdata('id_pelapor'));die();

		$data['array_kasus'] = $this->crud_model->mengambil_data_join_id('kasus', ['pelapor'] ,'pelapor.id_pelapor',$this->session->userdata('id_pelapor'));
		// print_r($_SESSION);die();
		// var_dump($data);die();
		
		$this->load->view('user_view_kasus',$data);
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
	
	
	public function add_kasus()
	{
		$data['array_pelapor'] = $this->crud_model->mengambil_data('pelapor');

		$this->load->view('user_add_kasus',$data);
	}	
	
	
	public function edit_kasus_user($id)
	{
		//load model crud
		$data['array_kasus'] = $this->crud_model->mengambil_data_id('kasus','kasus.id_kasus',$id);
		$data['obj_kasus'] = $data['array_kasus'][0];
		
		// var_dump($data);die();

		$this->load->view('user_edit_kasus', $data);
	}	

	public function edit_kasus_user_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'tanggal_laporan' => $this->input->post('tanggal_laporan'),
			'id_pelapor' => $this->input->post('id_pelapor'),
			'deskripsi_kasus' => $this->input->post('deskripsi_kasus'),		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('kasus', $data,'id_kasus',$this->input->post('id_kasus'));
		
		//redirect
		redirect('/user/view_kasus', 'refresh');
	}		

	public function edit_pelapor($id)
	{
		//load model crud
		$data['array_pelapor'] = $this->crud_model->mengambil_data_id('pelapor','id_pelapor',$id);
		$data['obj_pelapor'] = $data['array_pelapor'][0];
		
		// var_dump($data);die();

		$this->load->view('admin_edit_pelapor', $data);
	}	

	public function hapus_kasus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('kasus','id_kasus',$id);

		//redirect
		redirect('/user/view_kasus', 'refresh');
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

	public function profile()
	{
		$data['array_pelapor'] = $this->crud_model->mengambil_data('pelapor');

		$this->load->view('user_profile',$data);
	}

	public function edit_profile_go()
	{
		// var_dump($_POST);

		//variabel data edit
		$data = array(
			'nama_pelapor' => $this->input->post('nama_pelapor'),
			'nip' => $this->input->post('nip'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'nomor_telpon' => $this->input->post('nomor_telpon')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('pelapor', $data,'id_pelapor',$this->input->post('id_pelapor'));
	
		//redirect
		redirect('/user/profile', 'refresh');
	}
}