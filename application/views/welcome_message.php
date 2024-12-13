<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>PPKPT Nusamandiri</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="
	<?=base_url()?>css/bootstrap.min.css" crossorigin="anonymous">
    <style>
      .center {
        margin: auto;
        margin-top: 100px;
        width: 60%;
        padding: 10px;
        font-size: 18px;
      }

      td {
        padding: 2px 2px;
      }

      .nunito {
        font-family: 'Nunito', sans-serif;
      }

      body {
        font-family: 'Open Sans', sans-serif;
        background: linear-gradient(to left, #a2d9ff, #FFFFFF);
      }

      h4 {
        font-size: 24px;
      }

      button {
        padding: 3px 12px 3px 12px;
      }

      #myBtn {
        display: none;
        /* Hidden by default */
        position: fixed;
        /* Fixed/sticky position */
        bottom: 20px;
        /* Place the button at the bottom of the page */
        right: 30px;
        /* Place the button 30px from the right */
        z-index: 99;
        /* Make sure it does not overlap */
        border: none;
        /* Remove borders */
        outline: none;
        /* Remove outline */
        background-color: white;
        /* Set a background color */
        color: #163a76;
        /* Text color */
        cursor: pointer;
        /* Add a mouse pointer on hover */
        padding: 8px;
        /* Some padding */
        border-radius: 10px;
        /* Rounded corners */
        font-size: 18px;
        /* Increase font size */
      }

      #myBtn:hover {
        background-color: #555;
        /* Add a dark-grey background on hover */
      }

      .btn-oranye-cerah {
        background-color: #FFA500;
        border-color: #FFA500;
        color: #fff;
      }

      .btn-oranye-cerah:hover {
        background-color: #FF8C00;
        border-color: #FF8C00;
        color: #fff;
      }
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-2">
      <div class="container-fluid">
        <a class="navbar-brand " href="
				<?=site_url()?>">PPKPT Nusamandiri</a>
        <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item d-none">
              <a class="nav-link active" aria-current="page" href="
							<?=site_url()?>">Beranda </a>
            </li>
          </ul>
          <span class="navbar-text">
            <a href="
						<?=site_url('login')?>">Admin </a>
          </span>
        </div>
      </div>
    </nav>
    <div class="container row px-5">
      <div class="col-7 mb-5 px-5 align-self-center">
        <div class="container mt-5">
          <h1 class="mb-3 fw-bold">Tempat Laporan Terbuka</h1>
          <p>Website pengaduan adalah platform digital yang dirancang untuk memfasilitasi masyarakat dalam menyampaikan keluhan, laporan, atau masukan terkait layanan publik, infrastruktur, atau isu tertentu. Melalui website ini, pengguna dapat dengan mudah mengisi formulir pengaduan, melampirkan bukti pendukung, dan memantau status penyelesaian laporan mereka. Website pengaduan biasanya dilengkapi dengan fitur pencatatan otomatis, transparansi proses, serta integrasi notifikasi untuk memastikan setiap pengaduan mendapat tanggapan yang cepat dan tepat.</p>
          <a href="
					<?=site_url().'/welcome/homepage_daftar'?>">
            <button type="button" class="btn fw-bold btn-primary">Buat Aduan</button>
          </a>
        </div>
      </div>
      <div class="col-5">
        <img class="mt-5" width="600px" src="
				<?=base_url()?>img/main.png" />
      </div>
    </div>

<!-- Carousel Banner -->
<div id="carouselExampleCaptions" class="carousel slide mt-2" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 1</h5>
          <p>Deskripsi singkat tentang gambar pertama di banner ini.</p>
        </div>
      </div>
      <!-- Slide 2 -->
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 2</h5>
          <p>Deskripsi singkat tentang gambar kedua di banner ini.</p>
        </div>
      </div>
      <!-- Slide 3 -->
      <div class="carousel-item">
        <img src="https://via.placeholder.com/1200x500" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Slide 3</h5>
          <p>Deskripsi singkat tentang gambar ketiga di banner ini.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<!-- Kebijakan Pengaduan -->
<section class="container my-5">
    <h2 class="mb-4">1. Tujuan Pengaduan</h2>
    <p>Website pengaduan ini dibuat untuk memberikan wadah bagi masyarakat dalam menyampaikan keluhan atau masukan terkait layanan publik, infrastruktur, atau masalah lain yang memerlukan perhatian.</p>
    
    <h2 class="mb-4">2. Proses Pengaduan</h2>
    <p>Setiap pengaduan yang masuk akan diproses oleh tim terkait. Pengguna yang mengajukan pengaduan akan mendapatkan notifikasi terkait status pengaduan mereka. Waktu penyelesaian pengaduan dapat bervariasi tergantung pada jenis masalah yang dilaporkan.</p>
    
    <h2 class="mb-4">3. Privasi dan Keamanan</h2>
    <p>Data pribadi yang diberikan oleh pengguna akan dilindungi dan hanya digunakan untuk tujuan penanganan pengaduan. Kami tidak akan membagikan data pribadi pengguna kepada pihak ketiga tanpa izin dari pengguna, kecuali untuk keperluan hukum yang sah.</p>

    <h2 class="mb-4">4. Syarat Penggunaan</h2>
    <p>Pengguna diharapkan untuk tidak mengirimkan pengaduan yang tidak sesuai dengan ketentuan atau mengandung unsur kekerasan, ujaran kebencian, atau hal-hal yang melanggar hukum. Pengaduan yang tidak memenuhi ketentuan dapat dibatalkan atau ditangguhkan prosesnya.</p>
    
    <h2 class="mb-4">5. Tanggung Jawab</h2>
    <p>Kami berkomitmen untuk menangani setiap pengaduan dengan serius dan secepat mungkin. Namun, kami tidak bertanggung jawab atas keterlambatan atau masalah yang terjadi di luar kendali kami, seperti peraturan pemerintah atau masalah teknis lainnya.</p>
    
    <h2 class="mb-4">6. Pembaruan Kebijakan</h2>
    <p>Kebijakan ini dapat diperbarui dari waktu ke waktu. Pengguna akan diberitahukan tentang pembaruan yang terjadi, dan kebijakan yang terbaru akan berlaku setelah dipublikasikan di situs ini.</p>
  </section>


    <div class="container my-5">
      <h1 class="text-center mb-4">Frequently Asked Questions (FAQ)</h1>
      <div class="accordion" id="faqAccordion">
        <!-- Question 1 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingOne">
            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> Apa itu website pengaduan? </button>
          </h2>
          <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
            <div class="accordion-body"> Website pengaduan adalah platform online untuk menyampaikan keluhan, laporan, atau masukan terkait layanan tertentu secara mudah dan transparan. </div>
          </div>
        </div>
        <!-- Question 2 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Bagaimana cara membuat pengaduan? </button>
          </h2>
          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
            <div class="accordion-body"> Anda dapat membuat pengaduan dengan mengisi formulir yang tersedia, melampirkan bukti pendukung, dan mengirimkannya melalui tombol "Kirim Pengaduan". </div>
          </div>
        </div>
        <!-- Question 3 -->
        <div class="accordion-item">
          <h2 class="accordion-header" id="headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Berapa lama waktu tanggapan? </button>
          </h2>
          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
            <div class="accordion-body"> Waktu tanggapan tergantung pada kompleksitas pengaduan Anda, namun kami berupaya memberikan tanggapan dalam waktu 3-5 hari kerja. </div>
          </div>
        </div>
      </div>
    </div>

<!-- Galeri Foto -->
<section class="container my-5">
    <h2 class="text-center mb-4">Galeri Foto</h2>
    <div class="row g-3">
      <!-- Foto 1 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/300" class="card-img-top" alt="Foto 1">
          <div class="card-body">
            <p class="card-text">Deskripsi singkat foto 1.</p>
          </div>
        </div>
      </div>
      <!-- Foto 2 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/300" class="card-img-top" alt="Foto 2">
          <div class="card-body">
            <p class="card-text">Deskripsi singkat foto 2.</p>
          </div>
        </div>
      </div>
      <!-- Foto 3 -->
      <div class="col-md-4">
        <div class="card">
          <img src="https://via.placeholder.com/300" class="card-img-top" alt="Foto 3">
          <div class="card-body">
            <p class="card-text">Deskripsi singkat foto 3.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Berita -->
  <section class="container my-5">
    <h2 class="text-center mb-4">Berita Terkini</h2>
    <div class="row g-3">
      <!-- Berita 1 -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Judul Berita 1</h5>
            <p class="card-text">Ringkasan singkat dari berita pertama. Klik untuk membaca lebih lanjut.</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
      <!-- Berita 2 -->
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Judul Berita 2</h5>
            <p class="card-text">Ringkasan singkat dari berita kedua. Klik untuk membaca lebih lanjut.</p>
            <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
          </div>
        </div>
      </div>
    </div>
  </section>
	
	<footer class="bg-dark text-white py-4">
		<div class="container">
			<div class="row">
			<!-- Alamat -->
			<div class="col-md-6 mb-3">
				<h5>Alamat</h5>
				<p>
				Jalan Jendral Sudirman No. 123<br>
				Jakarta Pusat, Indonesia<br>
				Kode Pos: 10110
				</p>
			</div>
			<!-- Kontak -->
			<div class="col-md-6">
				<h5>Kontak</h5>
				<p>
				<strong>Email:</strong> info@example.com<br>
				<strong>Telepon:</strong> +62 123 4567 890<br>
				<strong>Jam Operasional:</strong> Senin - Jumat, 08.00 - 17.00 WIB
				</p>
			</div>
			</div>
			<hr class="border-secondary">
			<div class="text-center">
			<p class="mb-0">© 2024 Website Pengaduan. Semua Hak Dilindungi.</p>
			</div>
		</div>
		</footer>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>