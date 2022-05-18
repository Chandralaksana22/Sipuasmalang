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
    <div class="container">
            <div class="col-12 d-sm-flex align-items-center justify-content-between mb-3 mt-2">
                <img class="image img-fluid mx-auto d-block mt-4" src="img/logoheader.png">
            </div>
            <div>
                <center><h1 class="text-center"><strong>SIPUAS</strong></h1></center>
                 <center><p class="text-header-mobile text-shadow">Sistem Informasi Survei Kepuasan Pelayanan Dinas Pendidikan dan Kebudayaan Kota Malang<br><a href="#" data-toggle="modal" class="modalfont dev-mobile" data-target="#modalDiscount"> Develop by Tim Magang UM Antara 2021</a></p></center>
            </div>
            <div class="container h-100">
            	<div class="row h-100 justify-content-center align-items-center margin">
            	<div class="col-12 mt-4 mb-4">
	            <div class="kartu-info card shadow">
	                <div class="card-body">
	                    <div class="d-sm-flex align-items-center justify-content-between margin">
	                        <h6 class="h6 mb-2 ukuran-text-konten text-white">Apakah anda memiliki saran untuk pelayanan kami?</h6>
	                        <a href="kotaksaran.php" class="tombol-kotak-saran ukuran-text-konten btn btn-md text-white">Isi Kotak Saran</a>
	                    </div>
	                </div>
	            </div>
	        	</div>
            	</div>
            </div>
            <div class="container h-100">
            	<div class="row h-100 justify-content-center align-items-center margin">
            	<div class="col-12 col-md-6 mb-2">
                    <div class="kartu-info card shadow">
                        <div class="card-body">
                            <center><p class="ukuran-text-konten mb-0 text-white">Bagaimana pelayanan yang<br>anda dapatkan hari ini?</p><br>
                            <a href="survei_masyarakat.php"  class="tombol1 ukuran-text-konten btn btn-md  ml-1 mr-1 mb-1 text-white"><i class="emoji fas fa-poll"></i><br>Isi Survei</a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-2">
                    <div class="kartu-info card shadow">
                        <div class="card-body">
                            <center><p class="ukuran-text-konten mb-0 text-white">Apakah anda puas dengan<br>pelayanan yang kami berikan?</p><br>
                            <a href="koneksi/simpan.php?ket=puas" class="tombol1 ukuran-text-konten btn btn-md ml-1 mr-1 mb-1 text-white"><i class="emoji fas fa-laugh"></i><br>Puas</a>
                            <a href="koneksi/simpan.php?ket=tidak" class="tombol1 ukuran-text-konten btn btn-md ml-1 mr-1 mb-1 text-white"><i class="emoji fas fa-angry"></i><br>Tidak Puas</a>
                            </center>
                        </div>
                    </div>
                </div>
            	</div>
            </div>
            <div>
                <strong><hr class="garis"></strong>
                <center><h4 class="text-center mb-4"><strong>Informasi</strong></h4></center>
            </div>
            <div class="row card-deck margin">
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="ijinoperasionalpaud.php" class="textcontent text-justify">Pelayanan Legalitas Pendirian/Perpanjangan Ijin Operasional Paud</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="suratmasukkeluar.php" class="textcontent text-justify"><br>Pelayanan Surat Masuk</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="#" class="textcontent text-justify">Pelayanan Administrasi<br> Ijin Operasional<br> Sekolah Baru</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="lembagakursus.php" class="textcontent text-justify">Pelayanan <br> Administrasi Ijin Operasional <br>  Lembaga Kursus Baru</a>
                            </center>            
                        </div>
                    </div>
                </div>
                
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="legalisirijazah.php" class="textcontent text-justify">Pelayanan <br> Administrasi Legalisir Ijazah <br>SD SMP dan Paket</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="#" class="textcontent text-justify"><br>Arah Perjalanan Bus Sekolah</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="#" class="textcontent text-justify">Pelayanan <br> Penerbitan NPSN <br> Pendidikan Anak Usia Dini</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="mutasisekolah.php" class="textcontent text-justify">Pelayanan <br> Administrasi Mutasi <br> Siswa SD dan SMP</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="#" class="textcontent text-justify">Pelayanan <br> Surat Keterangan <br>Ijazah Rusak / Kesalahan Penulisan</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="#" class="textcontent text-justify">Pelayanan <br> Administrasi Penggantian <br> Ijazah yang Hilang</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="magang.php" class="textcontent text-justify">Pelayanan Rekomendasi <br> Penelitian dan Magang</a>
                            </center>            
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 mb-4 d-flex">
                    <div class="card-border card shadow">
                        <div class="card-body flex-fill">
                            <center><a href="#" class="textcontent text-justify">Pelayanan <br> Penerbitan NPSN <br>Jenjang Sekolah Dasar</a>
                            </center>            
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



                           