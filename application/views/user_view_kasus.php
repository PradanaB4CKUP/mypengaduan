<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>View Kasus</title>

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
      <h1>List Kasus</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=site_url('user/view_kasus')?>">Home</a></li>
          <li class="breadcrumb-item active">Lists Kasus</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">

            <!-- Recent Sales -->
              <div class="card recent-sales overflow-auto">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <h5 class="card-title">Data Kasus</h5>
                    <button class="btn btn-sm text-primary"><a href="<?=site_url('user/add_kasus')?>">Buat Laporan</a></button>
				          </div>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Tanggal Pengaduan</th>
                        <th scope="col">Tanggal Peristiwa</th>
                        <th scope="col">Nama Pelapor</th>
                        <th scope="col">Deskripsi Laporan</th>
                        <th scope="col">Status</th>
                        <th scope="col">Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php foreach($array_kasus as $kasus): ?>
                        <tr>
                          <th scope="row"><?=$kasus->id_kasus?></th>
                          <td><?=$kasus->tanggal_melapor?></td>
                          <td><?=$kasus->tanggal_laporan?></td>
                          <td><?=$kasus->nama_pelapor?></td>
                          <td><?=$kasus->deskripsi_kasus?></td>
                          <td><?=$kasus->status_kasus?></td>
                          <td><a href="<?=site_url('user/edit_kasus_user/'.$kasus->id_kasus)?>"><i class="bi bi-pencil-square"></i></a> | <a href="<?=site_url('user/hapus_kasus/'.$kasus->id_kasus)?>"><i class="bi bi-trash3"></i></a></td>
                        </tr>
                      <?php endforeach; ?>
                    </tbody>
                  </table>

                </div>
				
              </div><!-- End Recent Sales -->
	
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