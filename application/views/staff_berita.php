<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Berita Staff</title>

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
      <h1>Berita</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('staff') ?>">Home</a></li>
          <li class="breadcrumb-item active">Berita</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <h1>Daftar Berita</h1>
    <a class="btn btn-primary" href="<?php echo site_url('staff/create_berita'); ?>">Tambah Berita</a><br><br>

    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th scope="col">Id_Berita</th>
          <th scope="col">Gambar</th>
          <th scope="col">Judul</th>
          <th scope="col">Isi</th>
          <th scope="col">URL</th>
          <th scope="col">Author</th>
          <th scope="col">Keyword</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      
        <tbody>
        <?php foreach ($array_berita as $showberita): ?>
          <tr>
            <td><?php echo $showberita->id_berita; ?></td>
            <td><img src="<?php echo base_url('gambar_berita/' . $showberita->gambar_berita); ?>" width="100" height="100">
            </td>
            <td><?php echo $showberita->title; ?></td>
            <td><?php echo $showberita->isi; ?></td>
            <td><?php echo $showberita->url_berita; ?></td>
            <td><?php echo $showberita->author; ?></td>
            <td><?php echo $showberita->keyword; ?></td>
            <td><a class="btn btn-outline-warning"
                href="<?php echo site_url('staff/delete_berita/' . $showberita->id_berita); ?>">Hapus</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
        <!-- untuk debug
      <pre><?php print_r($showberita); ?></pre>
      -->
      </table>
    


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