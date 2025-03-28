<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@1,700&family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url();?>css/bootstrap.min.css" rel="stylesheet" >
    <link href="<?=base_url();?>css/style.css" rel="stylesheet" >    
    
    <style>
.btn-color{
  background-color: #0e1c36;
  color: #fff;
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}

body {
        font-family: 'Open Sans', sans-serif;
        background: linear-gradient(to left, #a2d9ff, #FFFFFF);
      }

.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
    </style>

  </head>
  <body>

<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <div class="card my-5">
          <form action="<?=site_url('akun/daftar_go')?>" method="post" class="card-body cardbody-color p-lg-5">

            <div class="text-center">
              <img src="https://visualpharm.com/assets/381/Admin-595b40b65ba036ed117d3b23.svg" class="img-fluid profile-image-pic img-thumbnail rounded-circle my-3"
                width="200px" alt="profile">
            </div>

            <div class="mb-3">
              <input name="nama_pelapor" type="text" class="form-control" id="nama_pelapor" placeholder="Nama Lengkap">
            </div>
            <div class="mb-3">
              <input name="nip" type="text" class="form-control" id="nip" placeholder="NIM/NIP/NIKaryawan">
            </div>
            <div class="mb-3">
              <input name="email" type="text" class="form-control" id="email" placeholder="Email">
            </div>
            <div class="mb-3">
              <input name="alamat" type="text" class="form-control" id="alamat" placeholder="Alamat">
            </div>
            <div class="mb-3">
              <input name="nomor_telpon" type="text" class="form-control" id="nomor_telpon" placeholder="Nomor Hp/Tlp">
            </div>
            <div class="mb-3">
              <input name="id_user" type="text" class="form-control" id="id_user" placeholder="Username">
            </div>
            <div class="mb-3">
              <input name="password_user" type="password" class="form-control" id="password_user" placeholder="Password">
              <input type="checkbox" onclick="myFunction()"> Show Password
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-3 w-100">Daftar</button></div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script>
    function myFunction() {
      var x = document.getElementById("password_user");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  </script>
    
  </body>
</html>
