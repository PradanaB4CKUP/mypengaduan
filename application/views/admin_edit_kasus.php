<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Edit kasus</title>

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
      <h1>Edit kasus</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?=site_url('admin')?>">Home</a></li>
          <li class="breadcrumb-item active">Edit kasus</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
	
		<div class="card">
            <div class="card-body">
              <h5 class="card-title">Mengubah kasus</h5>

              <!-- General Form Elements -->
              <form action="<?=site_url('admin/edit_kasus_go')?>" method="post">
                <div class="row mb-3 d-none">
                  <div class="col-sm-10">
                    <input name="id_kasus" type="hidden" value="<?=$obj_kasus->id_kasus?>" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Tanggal Peristiwa</label>
                  <div class="col-sm-10">
                    <input name="tanggal_laporan" type="date" readonly value="<?=$obj_kasus->tanggal_laporan?>" class="form-control">
                  </div>
                </div>
				
                <div class="row mb-3 d-none">
                  <label for="inputText" class="col-sm-2 col-form-label">Id Pelapor</label>
                  <div class="col-sm-10">
                    <input name="id_pelapor" type="hidden" value="<?=$obj_kasus->id_pelapor?>" class="form-control">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Nama Pelapor</label>
                  <div class="col-sm-10">
                    <input name="nama_pelapor" type="text" readonly value="<?=substr($obj_kasus->nama_pelapor,0,3).'####'?>" class="form-control">
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Deskripsi Kasus</label>
                  <div class="col-sm-10">
                    <textarea class="form-control" name="deskripsi_kasus" readonly id="exampleTextarea" rows="4"><?=$obj_kasus->deskripsi_kasus?></textarea>
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="inputText" class="col-sm-2 col-form-label">Status Kasus</label>
                  <div class="col-sm-10">
                    <!-- <select name="status_kasus" id="status_kasus" class="form-select"> -->
                    <select name="status_kasus" class="form-select" <?= ($obj_kasus->status_kasus == 'Selesai') ? 'disabled' : ''; ?>>
                    <option <?=($obj_kasus->status_kasus == 'Sedang berjalan') ? 'selected' : '';?>value="Sedang berjalan">Sedang berjalan</option>  
                    <option <?=($obj_kasus->status_kasus == 'Ditolak') ? 'selected' : '';?> value="Ditolak">Ditolak</option>
                    <option <?=($obj_kasus->status_kasus == 'Selesai') ? 'selected' : '';?> value="Selesai">Selesai</option>
                    </select>

                    <!-- <input type="hidden" name="status_kasus_hidden" id="status_kasus_hidden" value="<?=$obj_kasus->status_kasus;?>"> -->
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary" <?= ($obj_kasus->status_kasus == 'Selesai') ? 'disabled' : ''; ?>>Ubah</button>
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

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>js/main.js"></script>

</body>

</html>