<?php 
// mengaktifkan session php
session_start();

include"koneksi.php";

$pass = md5($_POST['password']);
$email = mysqli_escape_string($koneksi,$_POST['email']);
$password = mysqli_escape_string($koneksi,$pass);

$cek_user =  mysqli_query($koneksi, "SELECT * FROM admin WHERE email='$email'");
$user_valid = mysqli_fetch_array($cek_user);

if ($user_valid) {
	if ($password == $user_valid['password']) {
		session_start();
		$_SESSION['email'] = $user_valid ['email'];
		$_SESSION['nama'] = $user_valid ['nama'];
		$_SESSION['status'] = "login";
		header("location:../admin/index.php");
	}
	else {
	echo "<script>alert('maaf, login gagal, password anda salah!');document.location='../admin/login.php?pesan=gagal'</script>";
	}
}
else {
	echo "<script>alert('maaf, login gagal, email tidak terdaftar!');document.location='../admin/login.php?pesan=gagal'</script>";
}
?>