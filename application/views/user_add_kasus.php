<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Buat Laporan</title>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>css/niceadmin.css" rel="stylesheet">
  <link href="<?=base_url()?>css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>css/quill/quill.snow.css" rel="stylesheet">
  <link href="<?=base_url()?>css/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?=base_url()?>css/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url()?>css/simple-datatables/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
	<?php $this->load->view('component/navbar_user')?>  
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
	<?php $this->load->view('component/sidebar_user')?>  
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Buat Laporan</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=site_url('user/view_kasus')?>">Home</a></li>
          <li class="breadcrumb-item active">Buat Laporan</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
	
		<div class="card">
            <div class="card-body">
              <h5 class="card-title">Menambah Laporan</h5>

              <!-- General Form Elements -->
              <form action="<?=site_url('user/add_kasus_go')?>" method="post">
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tanggal Peristiwa</label>
                  <div class="col-sm-10">
                    <input name="tanggal_laporan" id="tanggal_laporan" type="date" required class="form-control">
                  </div>
                </div>
				
                <div class="row mb-3 d-none">
                  <label for="inputText" class="col-sm-2 col-form-label">id pelapor</label>
                  <div class="col-sm-10">
                    <input name="id_pelapor" type="hidden" value="<?=$this->session->userdata('id_pelapor')?>" class="form-control">
                  </div>
                </div>
				
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Deskripsi Kasus</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi_kasus" id="exampleTextarea" required rows="4" placeholder="Masukkan teks di sini..."></textarea>
                  </div>
                </div>
				
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </div>

              </form><!-- End General Form Elements -->

            </div>
          </div>
	
	</section>

  </main><!-- End #main -->

  <?php $this->load->view('component/footer') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>css/apexcharts/apexcharts.min.js"></script>
  <script src="<?=base_url()?>css/chart.js/chart.umd.js"></script>
  <script src="<?=base_url()?>css/echarts/echarts.min.js"></script>
  <script src="<?=base_url()?>css/quill/quill.min.js"></script>
  <script src="<?=base_url()?>css/simple-datatables/simple-datatables.js"></script>
  <script src="<?=base_url()?>css/tinymce/tinymce.min.js"></script>
  <script src="<?=base_url()?>css/php-email-form/validate.js"></script>
  <script src="<?=base_url()?>js/bootstrap.bundle.min.js"></script>
  <script>
  let today = new Date().toISOString().split("T")[0]; 
  document.getElementById("tanggal_laporan").setAttribute("max", today);
  </script>
  <!-- Template Main JS File -->
  <script src="<?=base_url()?>js/main.js"></script>

</body>

</html>