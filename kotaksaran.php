<?php
        //panggil koneksi database
        include "koneksi/koneksi.php";
    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/sipuas.css">

    <title>SIPUAS-Sistem Informasi Survei Kepuasan Pelayanan</title>
  </head>
  <body>
    <nav class="navbar navbar-light nav-responsive">
      <a class="navbar-brand" href="index.php">
        <img src="img/logo-header-content.png" width="120" height="55" class="d-inline-block align-top mt-2" alt="">
         <span class="navbar-text"><h4><strong>SIPUAS</strong></h4>
            <p class="subjudul sub-header-nav text-shadow">Sistem Informasi Survei Kepuasan Pelayanan Dinas Pendidikan dan Kebudayaan Kota Malang</p>
         </span>
      </a>
    </nav>
    <div class="container">
        <div class="header-mobile">
            <div class="col-12 d-sm-flex align-items-center justify-content-between mb-4">
                <img class="image-mobile img-fluid mx-auto d-block mt-4" src="img/logo-header.png">
            </div>
            <div>
                <center><div class="text-header-nav-mobile">SIPUAS</div></center>
                <center><p class="text-header-mobile text-shadow">Sistem Informasi Survei Kepuasan Pelayanan Dinas Pendidikan dan Kebudayaan Kota Malang<br><a href="#" data-toggle="modal" class="modalfont dev-mobiles" data-target="#modalDiscount"> Develop by Tim Magang UM Antara 2021</a></p></center>
            </div>
        </div>
        <div>
            <div>
                <center><h4 class="sipuas-mobile mt-5"><strong>Kotak Saran</strong></h4></center>
                <strong><hr class="garis"></strong>
                <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center margin">
                <div class="col-12 mt-4">
                    <form method="post" action="koneksi/inputsaran.php">
                        <div class="form-group">
                            <textarea placeholder="Tulis saran anda megenai pelayanan di Dinas Pendidikan dan Kebudayaan Kota Malang" class="form-control shadow border-text" name="saran" rows="10" required=""></textarea>
                        </div>
                        <div class="col-12 mt-2 mb-5">
                        <center><input type="submit" name="submit" value="Tambah Data" class="tombol-kirim btn btn-md btn-primary"></center>
                    </div>
                    </form>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-9">
            <div class=" text header-footer">SIPUAS</div>
            <p class="subjudul sub-header-footer sub-header-footer-mobile text-shadow">Sistem Informasi Survei Kepuasan Pelayanan Dinas Pendidikan dan Kebudayaan Kota Malang<br><a href="#" data-toggle="modal" class="modalfont dev-mobile" data-target="#modalDiscount"> Develop by Tim Magang UM Antara 2021</a></p>
            </div>
            <div class="col-1">
            </div>
            <div class="col-2 mr-set">
                <img class="image-footer img-fluid mx-auto d-block" src="img/logo-footer.png">
            </div>
        </div>
    </div>
            
                        
                       
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  </body>
</html>