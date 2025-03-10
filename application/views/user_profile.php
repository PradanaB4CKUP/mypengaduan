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

  <?php
    $logged_in_user_id = $this->session->userdata('id_pelapor'); // Example
    $profile = null;
  
    foreach ($array_pelapor as $p) {
        if ($p->id_pelapor === $logged_in_user_id) {
            $profile = $p;
            break; // Stop looping once found
        }
    }

    // Prevent errors if no match
    if (!$profile) {
        $profile = new stdClass();
    }
  ?>

   <main id="main" class="main">
    <div class="pagetitle">
      <h1>Edit Profile</h1>
      <nav>
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?=site_url('user/view_kasus')?>">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Profile</li>
        </ol>
      </nav>
    </div>
    <section class="section dashboard">
      <div class="card recent-sales overflow-auto">
          <div class="container">
              <div class="row">
              <!-- <script> -->
                <!-- var log = "<?= $profile->id_pelapor ?>"; -->
                 <!-- alert("ID Pelapor: <?= $this->session->userdata('id_pelapor'); ?>");  -->
                <!-- alert("ID Pelapor: " + log); -->
               <!-- </script> -->
                  <form action="<?=site_url('user/edit_profile_go')?>" method="post" class="card-body cardbody-color p-lg-4">
                      <div class="mb-3">
                        <!-- <td>ID Pelapor</td> -->
                        <input name="id_pelapor" type="hidden" class="form-control" id="id_pelapor"  value="<?= $profile->id_pelapor ?? '' ?>">
                      </div>
                      <div class="mb-3">
                        <td>Nama Lengkap</td>
                        <input name="nama_pelapor" type="text" class="form-control" id="nama_pelapor" value="<?=$profile->nama_pelapor ?? '' ?>">
                      </div>
                      <div class="mb-3">
                        <td>NIM/NIP/NIKaryawan</td>
                        <input name="nip" type="text" class="form-control" id="nip" value="<?=$profile->nip ?? '' ?>">
                      </div>
                      <div class="mb-3">
                        <td>Email</td>
                        <input name="email" type="text" class="form-control" id="email" value="<?=$profile->email ?? '' ?>">
                      </div>
                      <div class="mb-3">
                        <td>Alamat</td>
                        <input name="alamat" type="text" class="form-control" id="alamat" value="<?=$profile->alamat ?? '' ?>">
                      </div>
                      <div class="mb-3">
                        <td>Nomor Telp</td>
                        <input name="nomor_telpon" type="text" class="form-control" id="nomor_telpon" value="<?=$profile->nomor_telpon ?? '' ?>">
                      </div>
                      <div class="mb-3">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                          <button type="submit" class="btn btn-primary">Edit</button>
                        </div>
                      </div>
                  </form>
              </div>
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
