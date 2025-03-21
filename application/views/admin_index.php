<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard Admin</title>

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
	<?php $this->load->view('component/navbar')?>  
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
	<?php $this->load->view('component/sidebar')?>  
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=site_url('admin')?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
		<!-- Sales Card -->
					<div class="row">
					  <div class="col card info-card sales-card m-3">
						<div class="card-body">
						  <h5 class="card-title">Jumlah Pelapor</h5>
						  <div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              					<i class="bi bi-people-fill"></i>
							</div>
							<div class="ps-3">
							  <h6><?=$jumlah_pelapor?></h6>
							  <span class="text-muted small pt-2 ps-1">Total Pelapor</span>
							</div>
						  </div>
						</div>
					  </div>					  
					</div>			  
					</div>

					<div class="row">
					  <div class="col card info-card sales-card m-3">
						<div class="card-body">
						  <h5 class="card-title">Jumlah Kasus</h5>
						  <div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              					<i class="bi bi-exclamation-diamond-fill"></i>
							</div>
							<div class="ps-3">
							  <h6><?=$jumlah_kasus?></h6>
							  <span class="text-muted small pt-2 ps-1">Total Semua Kasus</span>
							</div>
						  </div>
						</div>
					  </div>					  
					</div>

					<div class="row">
					  <div class="col card info-card sales-card m-3">
						<div class="card-body">
						  <h5 class="card-title">Jumlah Kasus Baru</h5>
						  <div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
							<i class="bi bi-ticket"></i>
							</div>
							<div class="ps-3">
							  <h6><?=$jumlah_kasus_masuk?></h6>
							  <span class="text-muted small pt-2 ps-1">Total Kasus Baru</span>
							</div>
						  </div>
						</div>
					  </div>					  
					</div>

					<div class="row">
					  <div class="col card info-card sales-card m-3">
						<div class="card-body">
						  <h5 class="card-title">Jumlah Kasus Ditolak</h5>
						  <div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
							<i class="bi bi-x-circle-fill"></i>
							</div>
							<div class="ps-3">
							  <h6><?=$jumlah_kasus_tolak?></h6>
							  <span class="text-muted small pt-2 ps-1">Total Kasus Ditolak</span>
							</div>
						  </div>
						</div>
					  </div>			

					  <div class="row">
					  <div class="col card info-card sales-card m-3">
						<div class="card-body">
						  <h5 class="card-title">Jumlah Dalam Penanganan</h5>
						  <div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
              					<i class="bi bi-arrow-counterclockwise"></i>
							</div>
							<div class="ps-3">
							  <h6><?=$jumlah_kasus_berlajan?></h6>
							  <span class="text-muted small pt-2 ps-1">Kasus Yang Sedang Diselesaikan</span>
							</div>
						  </div>
						</div>
					  </div>					  
					</div>

					<div class="row">
					  <div class="col card info-card sales-card m-3">
						<div class="card-body">
						  <h5 class="card-title">Jumlah Kasus Selesai</h5>
						  <div class="d-flex align-items-center">
							<div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
               					<i class="bi bi-check-circle-fill"></i>
							</div>
							<div class="ps-3">
							  <h6><?=$jumlah_kasus_selesai?></h6>
							  <span class="text-muted small pt-2 ps-1">Kasus Yang Sudah Selesai</span>
							</div>
						  </div>
						</div>
					  </div>					  
					</div>
		<!-- End Sales Card -->    
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

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>js/main.js"></script>

</body>

</html>