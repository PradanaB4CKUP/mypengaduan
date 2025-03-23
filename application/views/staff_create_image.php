<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tambah Event</title>

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>css/niceadmin.css" rel="stylesheet">
  <link href="<?= base_url() ?>css/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>css/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>css/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>css/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>css/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>css/simple-datatables/style.css" rel="stylesheet">

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
  <?php $this->load->view('component/navbar_staff') ?>
  <!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <?php $this->load->view('component/sidebar_staff') ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Event</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('staff') ?>">Home</a></li>
          <li class="breadcrumb-item active">Event</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
  
      <h1>Tambah Event</h1>
      <?php echo form_open_multipart('staff/store_image'); ?>
      <label>Judul:</label>
      <textarea class="form-control" id="title" name="title" rows="1"></textarea>
      <br>
      <label>Deskripsi:</label>
      <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      <br>
      <label>Link Event:</label>
      <textarea class="form-control" id="url" name="url" rows="1"></textarea>
      <br>
      <label>Gambar: <input type="file" name="image"></label><br><br>
      <a><input type="submit" value="Upload"></a>
    </form>

  </main><!-- End #main -->

  <?php $this->load->view('component/footer') ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>css/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>css/chart.js/chart.umd.js"></script>
  <script src="<?= base_url() ?>css/echarts/echarts.min.js"></script>
  <script src="<?= base_url() ?>css/quill/quill.min.js"></script>
  <script src="<?= base_url() ?>css/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url() ?>css/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>css/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>js/bootstrap.bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>js/main.js"></script>

</body>

</html>