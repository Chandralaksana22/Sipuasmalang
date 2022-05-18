<?php
//Include file koneksi ke database
include "koneksi.php";

if(isset($_POST['simpan'])) {
    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['password'];
   

    $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM admin WHERE nama='$nama' or email='$email'"));
    if ($cek > 0){
    echo "<script>alert('maaf, login gagal, password anda salah!');document.location='../admin/daftar.php?pesan=gagal'</script>";
    }else {
    mysqli_query($koneksi,"INSERT INTO admin (nama,email,password) values
		('$nama','$email','$password')");

    echo "<script>alert('Pendaftaran berhasil!');document.location='../admin/daftar.php?pesan=berhasil'</script>";
    }
    }
?>