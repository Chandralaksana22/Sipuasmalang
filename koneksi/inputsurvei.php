<?php
include "koneksi.php";

if (isset($_POST['submit'])) {
  $usia = $_POST['usia'];
  $jk = $_POST['jk'];
  $pendidikan = $_POST['pendidikan'];
  $pekerjaan = $_POST['pekerjaan'];
  $keberadaaninformasi = $_POST['keberadaaninformasi'];
  $kemudahanmendapatkaninformasi = $_POST['kemudahanmendapatkaninformasi'];
  $kejelasaninformasi = $_POST['kejelasaninformasi'];
  $kemudahanpelayanan = $_POST['kemudahanpelayanan'];
  $informasiprosedur = $_POST['informasiprosedur'];
  $kemudahaninformasiprosedur = $_POST['kemudahaninformasiprosedur'];
  $kejelasaninformasiprosedur = $_POST['kejelasaninformasiprosedur'];
  $kemudahanmenjalankanprosedur = $_POST['kemudahanmenjalankanprosedur'];
  $informasipelayanan = $_POST['informasipelayanan'];
  $ketersediaanpengaduan = $_POST['ketersediaanpengaduan'];
  $ketepatanlayanan = $_POST['ketepatanlayanan'];

  

  // id_produk bernilai '' karena kita set auto increment
  $q = $koneksi->query("INSERT INTO survei VALUES ('','$usia','$jk','$pendidikan','$pekerjaan','$keberadaaninformasi','$kemudahanmendapatkaninformasi','$kejelasaninformasi','$kemudahanpelayanan','$informasiprosedur','$kemudahaninformasiprosedur','$kejelasaninformasiprosedur','$kemudahanmenjalankanprosedur','$informasipelayanan','$ketersediaanpengaduan','$ketepatanlayanan')");

  if ($q) {
    // pesan jika data tersimpan
    echo "<script>alert('Data produk berhasil ditambahkan'); window.location.href='../index.php'</script>";
  } else {
    // pesan jika data gagal disimpan
    echo "<script>alert('Data produk gagal ditambahkan'); window.location.href='../index.php'</script>";
  }
} else {
  // jika coba akses langsung halaman ini akan diredirect ke halaman index
  header('Location: ../index.php');
}

  ?>