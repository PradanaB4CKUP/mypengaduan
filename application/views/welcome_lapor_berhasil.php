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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Lapor Berhasil</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="
	<?=base_url()?>css/bootstrap.min.css" crossorigin="anonymous">
    <style>
    .checkmark {
      font-size: 80px;
      color: #4CAF50;
      margin: 2px auto;
    }


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
          <span class="navbar-text me-3">
            <a href="<?=site_url('akun')?>">Admin </a>
          </span>
          <span class="navbar-text d-none">
            <a href="<?=site_url('akun/akun_pelapor')?>">Pelapor </a>
          </span>
        </div>
      </div>
    </nav>

  
    <div class="container mt-5 text-center">
    <div class="checkmark">
      <i class="fa fa-check-circle"></i>
    </div>
    <div class="alert alert-success mt-3" role="alert">
      <h4 class="alert-heading">Laporan Berhasil Terkirim!</h4>
      <p>Terima kasih telah mengirimkan laporan Anda. Kami akan segera menindaklanjuti laporan Anda.</p>
      <hr>
      <p class="mb-0">Jika Anda memiliki pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami.</p>
    </div>
    <a href="<?=site_url()?>" class="btn btn-primary">Kembali ke Halaman Utama</a>
  </div>
  
  
  
    <footer class="bg-dark text-white py-4 mt-5">
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