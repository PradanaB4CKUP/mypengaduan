<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Website PPKPT Nusamandiri">
  <meta name="keywords" content="PPKPT, Nusamandiri, Universitas Nusa Mandiri">
  <meta name="author" content="Satgas PPKPT Nusamandiri">
  <meta name="generator" content="Hugo 0.84.0">
  <title>PPKPT Nusamandiri</title>
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="<?= base_url() ?>css/bootstrap.min.css" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
      margin: 0;
      padding: 0;
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

    .d-flex {
      display: flex;
      /* background: linear-gradient(to left, #a2d9ff, #FFFFFF); */
    }

    .me-3 {
      margin-right: 1.5rem;
      /* Adjust spacing as needed */
    }

    .b-0 {
      bottom: 0;
    }

    .bg-shadow {
      background: rgba(76, 76, 76, 0);
      background: -webkit-gradient(left top, left bottom, color-stop(0%, rgba(179, 171, 171, 0)), color-stop(49%, rgba(48, 48, 48, 0.37)), color-stop(100%, rgba(19, 19, 19, 0.8)));
      background: linear-gradient(to bottom, rgba(179, 171, 171, 0) 0%, rgba(48, 48, 48, 0.71) 49%, rgba(19, 19, 19, 0.8) 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#4c4c4c', endColorstr='#131313', GradientType=0);
    }

    .top-indicator {
      right: 0;
      top: 1rem;
      bottom: inherit;
      left: inherit;
      margin-right: 1rem;
    }

    .overflow {
      position: relative;
      overflow: hidden;
    }

    .zoom img {
      transition: all 0.2s linear;
    }

    .zoom:hover img {
      -webkit-transform: scale(1.1);
      transform: scale(1.1);
    }

  </style>
</head>

<body>
  <div class="container mx-auto">
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
      <img src="img/logo-universitas-nusa-mandiri.png" width="50px" alt="..." class="rounded">
      <a class="navbar-brand " href="
        <?= site_url() ?>">Satgas PPKPT Nusamandiri</a>
      <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarText"
        aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item d-none">
            <a class="nav-link active" aria-current="page" href="
              <?= site_url() ?>">Beranda </a>
          </li>
        </ul>
        <span class="navbar-text me-3">
          <a href="<?= site_url('akun') ?>">Admin </a>
        </span>
        <span class="navbar-text me-3">
          <a href="<?= site_url('akun/akun_staff') ?>">Staff </a>
        </span>
        <span class="navbar-text">
          <a href="<?= site_url('akun/akun_pelapor') ?>">Pelapor </a>
        </span>
      </div>
    </nav>
  </div>

  <section class="container mx-auto">
    <div class="d-flex">
      <div class="col-7 mb-5 px-7 align-self-center">
        <h1 class="mb-4 fw-bold">Apa itu Satgas PPKPT ?</h1></br>
        <p>Satuan Tugas Pencegahan dan Penanganan Kekerasan di Lingkungan Perguruan Tinggi (SATGAS PPKPT) Universitas
          Nusa Mandiri adalah platform kampus dalam upaya penanganan dan pencegahan kekerasan yang dapat dimanfaatkan
          oleh civitas akademik untuk melaporkan kejadian kekerasan yang dialami ataupun dilihat di lingkungan kampus
          Nusa Mandiri.</p>
        <a href="
                <?= site_url() . '/akun/akun_pelapor' ?>">
          <button type="button" class="btn fw-bold btn-primary">Buat Aduan</button>
        </a>
      </div>
      <div>
        <div class="mt-10">
          <img class="img" width="100%" src="<?= base_url() ?>img/main1.png" />
          <!-- <img src="<?= base_url() ?>img/main1.png" class="rounded float-end" alt="..."> -->
        </div>
      </div>
    </div>
  </section>
  <section class="container mx-auto">
    <!-- Carousel Banner -->
    <div id="carouselExampleCaptions" class="carousel slide mt-2" data-bs-ride="carousel">
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <img src="img/Point-Point-Perubahan-Permen-30-ke-55.png" class="d-block w-auto" alt="...">
          <div class="carousel-caption d-none d-md-block bg-shadow">
            <h5>Poin Perubahan Permendikbudristek</h5>
            <p>Dari Permendikbudristek 30/2021 PPKS menjadi 55/2024 PPKPT</p>
          </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-item">
          <img src="img/Point-Point-Perubahan-Permen-30-ke-55-2.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block bg-shadow">
            <h5>Slide 2</h5>
            <p>Deskripsi singkat tentang gambar kedua di banner ini.</p>
          </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-item">
          <img src="img/Point-Point-Perubahan-Permen-30-ke-55-3.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block bg-shadow">
            <h5>Slide 3</h5>
            <p>Deskripsi singkat tentang gambar ketiga di banner ini.</p>
          </div>
        </div>
        <!-- Slide 4 -->
        <div class="carousel-item">
          <img src="img/Point-Point-Perubahan-Permen-30-ke-55-4.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block bg-shadow">
            <h5>Slide 4</h5>
            <p>Deskripsi singkat tentang gambar kedua di banner ini.</p>
          </div>
        </div>
        <!-- Slide 5 -->
        <div class="carousel-item">
          <img src="img/Point-Point-Perubahan-Permen-30-ke-55-5.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block bg-shadow">
            <h5>Slide 5</h5>
            <p>Deskripsi singkat tentang gambar kedua di banner ini.</p>
          </div>
        </div>
        <!-- Slide 6 -->
        <div class="carousel-item">
          <img src="img/Point-Point-Perubahan-Permen-30-ke-55-6.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block bg-shadow">
            <h5>Slide 6</h5>
            <p>Deskripsi singkat tentang gambar kedua di banner ini.</p>
          </div>
        </div>
        <!-- Slide 7 -->
        <div class="carousel-item">
          <img src="img/Point-Point-Perubahan-Permen-30-ke-55-7.png" class="d-block w-100" alt="...">
          <div class="carousel-caption d-none d-md-block bg-shadow">
            <h5>Slide 7</h5>
            <p>Deskripsi singkat tentang gambar kedua di banner ini.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
      <div class="carousel-indicators mt-0">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
          aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4"
          aria-label="Slide 5"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5"
          aria-label="Slide 6"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6"
          aria-label="Slide 7"></button>
      </div>
    </div>

  </section>
  <!-- Kebijakan Pengaduan -->
  <section class="container mx-auto my-5">
    <h1 class="mb-3">TUJUAN</h2>
      <p>Website pengaduan ini dibuat untuk memberikan wadah bagi mahasiswa dalam melaporkan keluhan atau masukan
        terkait kekerasan seksual yang terjadi di lingkungan kampus Nusa Mandiri</p>

      <h2 class="mb-3">PENGADUAN</h2>
      <p>Setiap pengaduan yang masuk akan diproses oleh tim. Pengguna yang mengajukan pengaduan akan mendapatkan
        notifikasi terkait status pengaduan mereka. Waktu penyelesaian pengaduan dapat bervariasi tergantung pada jenis
        masalah yang dilaporkan.</p>

      <h2 class="mb-3">PRIVASI DAN KEAMANAN</h2>
      <p>Data pribadi yang diberikan oleh pengguna akan dilindungi dan hanya digunakan untuk tujuan penanganan
        pengaduan. Kami tidak akan membagikan data pribadi pengguna kepada pihak ketiga tanpa izin dari pengguna,
        kecuali untuk keperluan hukum yang sah.</p>

      <h2 class="mb-3">SYARAT PENGADUAN</h2>
      <p>Pengguna diharapkan untuk tidak mengirimkan pengaduan yang tidak sesuai dengan ketentuan atau mengandung unsur
        kekerasan, ujaran kebencian, atau hal-hal yang melanggar hukum. Pengaduan yang tidak memenuhi ketentuan dapat
        dibatalkan atau ditangguhkan prosesnya.</p>
  </section>
  <div class="container mx-auto">
    <h1 class="text-center mb-4">Frequently Asked Questions (FAQ)</h1>
    <div class="accordion" id="faqAccordion">
      <!-- Question 1 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
          <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
            aria-expanded="true" aria-controls="collapseOne"> Apa Saja Bentuk Kekerasan ? </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body"> Terdapat 6 Bentuk Kekerasan yang patut dilaporkan yaitu, Kekerasan Fisik,
            Kekerasan Psikis, Perundungan, Kekerasan Sexual, Diskriminasi dan Intoleransi, Kebijakan yang mengandung
            kekerasan. </div>
        </div>
      </div>
      <!-- Question 2 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> Bagaimana cara membuat
            pengaduan? </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body"> Anda dapat membuat pengaduan dengan mengisi formulir yang tersedia, melampirkan
            bukti pendukung, dan mengirimkannya melalui tombol "Kirim Pengaduan". </div>
        </div>
      </div>
      <!-- Question 3 -->
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> Berapa lama waktu
            tanggapan? </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
          data-bs-parent="#faqAccordion">
          <div class="accordion-body"> Waktu tanggapan tergantung pada kompleksitas pengaduan Anda, namun kami berupaya
            memberikan tanggapan dalam waktu 3-5 hari kerja. </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Galeri Foto -->
  <section class="container mx-auto my-5">
    <h1 class="text-center mb-4">Galeri Event</h1>
    <div class="row g-3">
      <?php foreach ($images as $image): ?>
        <div class="col-md-6">
          <div class="card flex-md-row mb-4 shadow-sm h-md-250">
            <div class="card-body d-flex flex-column align-items-start">
              <strong class="d-inline-block mb-2 text-primary"><?php echo $image['title']; ?></strong>
              <p>Published: <?php echo (new DateTime($image['tanggal_event']))->format('d/m/Y'); ?></p>
              <p class="card-text"><?php echo $image['description']; ?></p>
              <a class="btn btn-outline-primary btn-sm" role="button" href="<?php echo $image['url']; ?>">Open Event</a>
            </div>
            <img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]"
              src="<?php echo base_url('images/' . $image['image']); ?>" style="width: 230px; height: 250px;">
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <!-- Berita -->
  <section class="container mx-auto my-5">
    <h1 class="text-center mb-4">Berita Terkini</h1>
    <div class="row g-3">
      <?php foreach ($array_berita as $berita): ?>
        <div class="col-md-6">
          <div class="card border-0 rounded-0 text-white overflow zoom">
            <div class="position-relative mx-auto">
              <!--thumbnail img-->

              <div class="ratio_right-cover-2 image-wrapper">
                <img class="img-fluid" src="<?php echo base_url('gambar_berita/' . $berita->gambar_berita); ?>" alt=""
                  style="width: 418px; height: 355px;">
              </div>

              <div class="position-absolute p-1 p-lg-3 b-0 w-100 bg-shadow">
                <!-- meta data -->
                <div class="meta-news">
                  <!-- title dan url -->
                  <a class="p-1 badge badge-primary rounded-0"
                    href="<?php echo $berita->url_berita; ?>"><?php echo $berita->title; ?></a>

                  <!--isi-->
                  <span class="news-description">
                    <h2 class="h5 text-white my-1"><?php echo $berita->isi; ?></h2>
                  </span>
                  <!-- author -->
                  <span class="news-author">by <a class="text-white font-weight-bold"
                      href=""><?php echo $berita->author; ?></a></span>
                  <!-- date -->
                  <span class="news-date"><?php echo (new DateTime($berita->tanggal_berita))->format('j M Y'); ?></span>
                  <!-- untuk keyword -->
                  <br>
                  <span class="meta-keyword">
                    <?php foreach (explode(',', $berita->keyword) as $keyword) {
                      echo '<a class="p-1 badge badge-secondary rounded-0 mx-1" href="">' . $keyword . '</a>';
                    } ?>
                    <!-- <span><i class="glyphicon glyphicon-comment"></i> <a
                        href="http://wordpress.thebebel.com/showcase/newsbook/2015/01/19/meet-asias-best-destinations-for-the-summer/#respond">No
                        Comments</a></span>
                    <span><i class="glyphicon glyphicon-time"></i> Sep 15, 2015</span> -->
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>

  <div class="container my-5 mx-auto">
    <footer class="bg-dark text-white py-4">
      <div class="container">
        <div class="row">
          <!-- Alamat -->
          <div class="col-md-6 mb-3">
            <h5>Alamat</h5>
            <p>
              Jl. Kramat Raya No.18, RT.5/RW.7,<br>
              Kwitang, Kec. Senen, Kota Jakarta Pusat,<br>
              Daerah Khusus Ibukota Jakarta<br>
              10450
            </p>
          </div>
          <!-- Kontak -->
          <div class="col-md-6">
            <h5>Kontak</h5>
            <p>
              <strong>Email:</strong> satgasppkpt@nusamandiri.ac.id<br>
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
  </div>


  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>