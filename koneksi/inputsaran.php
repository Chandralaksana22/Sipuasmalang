<?php

require_once 'koneksi.php';

if (isset($_POST['submit'])) {
  $saran = $_POST['saran'];
  $tanggal = date("Y-m-d H:i:s");

  // id_produk bernilai '' karena kita set auto increment
  $q = $koneksi->query("INSERT INTO kotak_saran VALUES ('','$tanggal','$saran')");

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
