<!doctype html>
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
        <!--Main Content-->
        <div>
            <center><h4 class="sipuas-mobile mt-5"><strong>Survei Masyarakat</strong></h4></center>
            <strong><hr class="garis"></strong>
        </div>
            <div class="row h-100 margin">
                <form method="post" action="koneksi/inputsurvei.php">
                  <div class="container">
                    <div class="row">
                    <div class="col-12 col-md-12 mb-4">
                      <h6 class="ml-2 mb-3 headsurvei">Profile</h6>
                    <div class="card-border card shadow">
                        <div class="card-body">
                            <p href="#" class="textcontent text-justify">1.Berapakah usia Anda saat ini?</p>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="usia" id="usia" value="Antara 2 hingga 10 tahun" required="">
                                      <label class="form-check-labe textcontent" for="usia">
                                        Antara 2 hingga 10 tahun
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                     <input class="form-check-input" type="radio" name="usia" id="usia" value="Antara 11 hingga 19 tahun" required="">
                                      <label class="form-check-labe textcontent" for="usia">
                                        Antara 11 hingga 19 tahun
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="usia" id="usia" value="Antara 20 hingga 40 tahun" required="">
                                      <label class="form-check-labe textcontent" for="usia">
                                        Antara 20 hingga 40 tahun
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="usia" id="usia" value="Antara 41 hingga 65 tahun" required="">
                                      <label class="form-check-labe textcontent" for="usia">
                                        Antara 41 hingga 65 tahun
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="usia" id="usia" value="Diatas 65 tahun" required="">
                                      <label class="form-check-labe textcontent" for="usia">
                                        Diatas 65 tahun
                                      </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-12 col-md-12 mb-4">
                    <div class="card-border card shadow">
                        <div class="card-body">
                            <p href="#" class="textcontent text-justify">2.Apa jenis kelamin Anda?</p>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki" required="">
                                      <label class="form-check-labe textcontent" for="jk">
                                        Laki-Laki
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan" required="">
                                      <label class="form-check-labe textcontent" for="jk">
                                        Perempuan
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="jk" id="jk" value="Tidak ingin menyebutkan" required="">
                                      <label class="form-check-labe textcontent" for="jk">
                                        Tidak ingin menyebutkan
                                      </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-12 col-md-12 mb-4">
                    <div class="card-border card shadow">
                        <div class="card-body">
                            <p href="#" class="textcontent text-justify">3. Apa jenjang pedidikan yang terakhir anda tempuh?</p>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="Tidak Bersekolah" required="">
                                      <label class="form-check-labe textcontent" for="pendidikan">
                                        Tidak bersekolah
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="SD" required="">
                                      <label class="form-check-labe textcontent" for="pendidikan">
                                        SD
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="SMP" required="">
                                      <label class="form-check-labe textcontent" for="pendidikan">
                                        SMP
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="SMA" required="">
                                      <label class="form-check-labe textcontent" for="pendidikan">
                                        SMA
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="S1" required="">
                                      <label class="form-check-labe textcontent" for="pendidikan">
                                        S1
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pendidikan" id="pendidikan" value="S2/ Yang lebih tinggi" required="">
                                      <label class="form-check-labe textcontent" for="pendidikan">
                                        S2/Yang lebih tinggi
                                      </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-12 col-md-12 mb-4">
                    <div class="card-border card shadow">
                        <div class="card-body">
                            <p href="#" class="textcontent text-justify">4. Apa pekerjaan anda saat ini?</p>
                            <div class="row">
                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Belum/Tidak Bekerja" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Belum/tidak bekerja
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Mengurus Rumah Tangga" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Mengurus rumah tangga
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                     <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Wirausaha/Wiraswasta" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Wirausaha/Wiraswasta
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Pedagang" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Pedagang
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Anggota Dewan" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Anggota dewan
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Pemuka Agama" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Pemuka agama
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Pelajar/Mahasiswa" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Pelajar/Mahasiswa
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="TNI/Polri" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        TNI/Polri
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Guru/Dosen" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Guru/Dosen
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Tenaga Medis" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Tenaga Medis
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Tukang" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Tukang
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="PNS" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        PNS
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Petani" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Petani
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Karyawan/Buruh" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Karyawan/Buruh
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Pemuka Agama" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Pemuka Agama
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Pegiat Seni" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Pegiat Seni
                                      </label>
                                    </div>
                                </div>

                                <div class="col-6 col-md-4">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="pekerjaan" id="pekerjaan" value="Lainnya" required="">
                                      <label class="form-check-labe textcontent" for="pekerjaan">
                                        Lainnya
                                      </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                      <div class="col-12 col-md-12 mb-4">
                        <h6 class="ml-2 mb-3 headsurvei">Persyaratan Pelayanan</h6>
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">1. Apakah anda puas dengan keberadaan informasi mengenai persyaratan pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="keberadaaninformasi" id="keberadaaninformasi" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="keberadaaninformasi">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="keberadaaninformasi" id="keberadaaninformasi" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="keberadaaninformasi">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="keberadaaninformasi" id="keberadaaninformasi" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="keberadaaninformasi">
                                          Puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                         <input class="form-check-input" type="radio" name="keberadaaninformasi" id="keberadaaninformasi" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="keberadaaninformasi">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>

                      <div class="col-12 col-md-12 mb-4">
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">2. Apakah anda puas dengan kemudahan mendapatkan informasi mengenai persyaratan pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                         <input class="form-check-input" type="radio" name="kemudahanmendapatkaninformasi" id="kemudahanmendapatkaninformasi" value="Sangat tidak puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanmendapatkaninformasi">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanmendapatkaninformasi" id="kemudahanmendapatkaninformasi" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanmendapatkaninformasi">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanmendapatkaninformasi" id="kemudahanmendapatkaninformasi" value=" Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanmendapatkaninformasi">
                                          Puas
                                        </label>
                                      </div>
                                  </div>
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanmendapatkaninformasi" id="kemudahanmendapatkaninformasi" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanmendapatkaninformasi">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                      </div>

                      <div class="col-12 col-md-12 mb-4">
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">3. Apakah anda puas dengan kejelasan informasi mengenai persyaratan pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kejelasaninformasi" id="kejelasaninformasi" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kejelasaninformasi">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kejelasaninformasi" id="kejelasaninformasi" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kejelasaninformasi">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kejelasaninformasi" id="kejelasan informasi" value="Puas">
                                        <label class="form-check-labe textcontent" for="kejelasaninformasi">
                                          Puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                       <input class="form-check-input" type="radio" name="kejelasaninformasi" id="kejelasaninformasi" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="kejelasaninformasi">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                      </div>

                      <div class="col-12 col-md-12 mb-4">
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">4. Apakah anda puas dengan kemudahan memenuhi persyaratan pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanpelayanan" id="kemudahanpelayanan" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanpelayanan">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanpelayanan" id="kemudahanpelayanan" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanpelayanan">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanpelayanan" id="kemudahanpelayanan" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanpelayanan">
                                          Puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanpelayanan" id="kemudahanpelayanan" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanpelayanan">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <hr class="garis">

                      <div class="col-12 col-md-12 mb-4">
                        <h6 class="ml-2 mb-3 headsurvei">Sistem, Mekanisme dan Prosedur</h6>
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">1. Apakah anda puas dengan keberadaan informasi mengenai persyaratan pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="informasiprosedur" id="informasiprosedur" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="informasiprosedur">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="informasiprosedur" id="informasiprosedur" value="Tidak Puas" required="" >
                                        <label class="form-check-labe textcontent" for="informasiprosedur">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="informasiprosedur" id="informasiprosedur" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="informasiprosedur">
                                          Puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                       <input class="form-check-input" type="radio" name="informasiprosedur" id="informasiprosedur" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="informasiprosedur">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>

                      <div class="col-12 col-md-12 mb-4">
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">2. Apakah anda puas dengan kemudahan mendapatkan informasi mengenai sistem, mekanisme dan prosedur pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahaninformasiprosedur" id="kemudahaninformasiprosedur" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahaninformasiprosedur">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahaninformasiprosedur" id="kemudahaninformasiprosedur" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahaninformasiprosedur">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahaninformasiprosedur" id="kemudahaninformasiprosedur" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahaninformasiprosedur">
                                          Puas
                                        </label>
                                      </div>
                                  </div>
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahaninformasiprosedur" id="kemudahaninformasiprosedur" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahaninformasiprosedur">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                      </div>

                      <div class="col-12 col-md-12 mb-4">
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">3. Apakah anda puas dengan kejelasan informasi mengenai sistem, mekanisme dan prosedur pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kejelasaninformasiprosedur" id="kejelasaninformasiprosedur" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kejelasaninformasiprosedur">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                         <input class="form-check-input" type="radio" name="kejelasaninformasiprosedur" id="kejelasaninformasiprosedur" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kejelasaninformasiprosedur">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                         <input class="form-check-input" type="radio" name="kejelasaninformasiprosedur" id="kejelasaninformasiprosedur" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="kejelasaninformasiprosedur">
                                          Puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                         <input class="form-check-input" type="radio" name="kejelasaninformasiprosedur" id="kejelasaninformasiprosedur" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="kejelasaninformasiprosedur">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                      </div>

                      <div class="col-12 col-md-12 mb-4">
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">4. Apakah anda puas dengan kemudahan menjalankan sistem, mekanisme dan prosedur pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                         <input class="form-check-input" type="radio" name="kemudahanmenjalankanprosedur" id="kemudahanmenjalankanprosedur" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanmenjalankanprosedur">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanmenjalankanprosedur" id="kemudahanmenjalankanprosedur" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanmenjalankanprosedur">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanmenjalankanprosedur" id="kemudahanmenjalankanprosedur" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanmenjalankanprosedur">
                                          Puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="kemudahanmenjalankanprosedur" id="kemudahanmenjalankanprosedur" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="kemudahanmenjalankanprosedur">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>
                      <hr class="garis">

                      <div class="col-12 col-md-12 mb-4">
                        <h6 class="ml-2 mb-3 headsurvei">Penanganan Pengaduan, Saran dan Masukan</h6>
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">1. Apakah anda puas dengan keberadaan informasi mengenai persyaratan pelayanan?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="informasipelayanan" id="informasipelayanan" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="informasipelayanan">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="informasipelayanan" id="informasipelayanan" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="informasipelayanan">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                       <input class="form-check-input" type="radio" name="informasipelayanan" id="informasipelayanan" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="informasipelayanan">
                                          Puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="informasipelayanan" id="informasipelayanan" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="informasipelayanan">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>

                      <div class="col-12 col-md-12 mb-4">
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">2. Apakah anda puas dengan ketersediaan pengaduan masyarakat? (Berupa media pengaduan seperti kotak pengaduan, buku panduan, sms pengaduan, call center pengaduan, dan yang lainnya)</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                       <input class="form-check-input" type="radio" name="ketersediaanpengaduan" id="ketersediaanpengaduan" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="ketersediaanpengaduan">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ketersediaanpengaduan" id="ketersediaanpengaduan" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="ketersediaanpengaduan">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                       <input class="form-check-input" type="radio" name="ketersediaanpengaduan" id="ketersediaanpengaduan" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="ketersediaanpengaduan">
                                          Puas
                                        </label>
                                      </div>
                                  </div>
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ketersediaanpengaduan" id="ketersediaanpengaduan" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="ketersediaanpengaduan">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>

                              </div>
                          </div>
                      </div>
                      </div>

                      <div class="col-12 col-md-12 mb-4">
                      <div class="card-border card shadow">
                          <div class="card-body">
                              <p href="#" class="textcontent text-justify">3. Apakah anda puas dengan ketepatan hasil layanan yang sesuai dengan ketentuan yang berlaku?</p>
                              <div class="row">
                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                       <input class="form-check-input" type="radio" name="ketepatanlayanan" id="ketepatanlayanan" value="Sangat Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="ketepatanlayanan">
                                          Sangat tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ketepatanlayanan" id="ketepatanlayanan" value="Tidak Puas" required="">
                                        <label class="form-check-labe textcontent" for="ketepatanlayanan">
                                          Tidak puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ketepatanlayanan" id="ketepatanlayanan" value="Puas" required="">
                                        <label class="form-check-labe textcontent" for="ketepatanlayanan">
                                          Puas
                                        </label>
                                      </div>
                                  </div>

                                  <div class="col-6 col-md-3">
                                      <div class="form-check">
                                        <input class="form-check-input" type="radio" name="ketepatanlayanan" id="ketepatanlayanan" value="Sangat Puas" required="">
                                        <label class="form-check-labe textcontent" for="ketepatanlayanan">
                                          Sangat puas
                                        </label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      </div>

                      </div>
                    </div>
                    <div class="col-12 mt-2 mb-5">
                        <center><input type="submit" name="submit" value="Kirim Survei" class="tombol-kirim btn btn-md btn-primary"></center>
                        </div>
                </form>
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
            <div class="col-2">
                <img class="image-footer img-fluid mx-auto d-block" src="img/logo-footer.png">
            </div>
        </div>
    </div>
            
<!--Modal: posisi-->
    <div class="modal fade " id="konfirmasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog " role="document">
        <!--Content-->
        <div class="card-border modal-content">

          <!--Body-->
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <p class="text-center header-pop-up">
                  Apakah anda yakin dengan jawaban anda?
                </p>
              </div>
              <div class="card-body">
                <center>
                    <button data-dismiss="modal" class="btn btn-danger btn-konf ukuran-text-konten">Tidak Yakin</button>
                    <button data-toggle="modal" data-target="#terimakasih" class="btn btn-success btn-konf ukuran-text-konten">Yakin</button>
                </center>
              </div>
            </div>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>

    <!--Modal: terimakasih-->
    <div class="modal fade " id="terimakasih" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
      aria-hidden="true" data-backdrop="true">
      <div class="modal-dialog " role="document">
        <!--Content-->
        <div class="card-border modal-content">

          <!--Body-->
          <div class="modal-body">
            <div class="row">
              <div class="col-12">
                <p class="text-center header-pop-up">
                  Terimakasih atas jawaban anda
                </p>
              </div>
              <div class="card-body">
                <center>
                    <a href="index.html" class="btn btn-success ukuran-text-konten">Kembali ke<br>Awal</a>
                </center>
              </div>
            </div>
          </div>
        </div>
        <!--/.Content-->
      </div>
    </div>
                    
                       
    <!-- Optional JavaScript; choose one of the two! -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script type="text/javascript">
      $("#terimakasih").on('show.bs.modal', function (e) {
      $("#konfirmasi").modal("hide");});
    </script>
  </body>
</html>
